<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notas.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();
        return redirect('notas/create')->with('success', 'added note!!');
    }

    public function show($id)
    {
        $nota = Note::findOrFail($id);
        return view('notas.show', compact("nota"));
    }
    public function showPag()
    {
        $note = Note::simplePaginate(1);
        return view('notas.showPag', ['note' => $note]);
    }

    public function edit($id)
    {
        $nota = Note::findOrFail($id);
        return view('notas.edit', compact("nota"));
    }
    public function editChange(Request $request, $id)
    {
        $nota = Note::find($id);
        if ($nota) {
            $request->validate([
                'title' => 'required'
            ]);

            $nota->update([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
            return redirect("notas/$id")->with('success', 'modified!!');
        } else {
            return redirect("notas/$id")->with('error', 'error :(');
        }
    }

    public function delete($id)
    {
        $note = Note::find($id);
        if($note) {
            $note->delete();
            return redirect("notas")->with('success', 'delete!!');
        }else{
            return redirect("notas/$id")->with('error', 'error :(');
        }
    }

    
}
