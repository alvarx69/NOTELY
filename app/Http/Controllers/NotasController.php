<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notas/index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notas/create');
    }

    public function show($id)
    {
        $nota = Note::findOrFail($id);
        return view('notas.show', compact("nota"));
    }
    public function edit($id)
    {
        $nota = Note::findOrFail($id);
        return view('notas.edit', compact("nota"));
    }
}
