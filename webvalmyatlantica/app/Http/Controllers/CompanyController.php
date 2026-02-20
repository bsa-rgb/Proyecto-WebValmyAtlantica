<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $user = Auth::user();

        //lógica de roles:
        if ($user->role === 'admin' || $user->role === 'empleado'){
            //buscar en todas las empresas
            $companies = Company::query()
                ->when($search, function ($query, $search) {
                    $query->where(function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%")
                      ->orWhere('nif', 'like', "%{$search}%");
                });
            })
            ->get();
        } else {
            //cliente solo ve la empresa a la que pertenece
            $companies = Company::where('id', $user->companyID)->get();
        }

        //datos a la fase 3
        return Inertia::render('Companies/index', [
            'companies' => $companies,
            'filters' => $request->only(['search'])
        ]);
    }
}
