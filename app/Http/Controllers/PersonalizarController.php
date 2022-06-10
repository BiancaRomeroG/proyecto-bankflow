<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class PersonalizarController extends Controller
{
    public function index()
    {
        $clientes = clientes::paginate(6);
        return view('tenant.configuraciones.general.index', compact('clientes'))->with('i');
    }
    public function store()
    {
        return "Store";
    }
}
