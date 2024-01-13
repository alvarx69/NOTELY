<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        return view('notas/index');
    }

    public function create()
    {
        return view('notas/create');
    }

    public function show($nota)
    {
        return view('notas/show', ['nota' => $nota]);
    }
}
