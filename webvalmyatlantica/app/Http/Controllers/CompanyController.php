<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(){
        $user = Auth::user();

        //lógica de roles:
        if ($user->role === 'admin' || $user->role === 'empleado'){
            //admin y empleado ven todas las empresas
            $companies = Company::all();
        } else {
            //cliente solo ve la empresa a la que pertenece
            $companies = Company::where('id', $user->companyID)->get();
        }

        //datos a la fase 3
        return Inertia::render('Companies/index', [
            'companies' => $companies
        ]);
    }
}
