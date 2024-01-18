<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotasController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        if ($user) {
            $notes = $user->notes;
        }
        return view('notas.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::id());
        if ($user) {
            $note = new Note;
            if ($request->title && $request->description) {
                $note->title = $request->title;
                $note->description = $request->description;
                $user->notes()->save($note);
                return redirect()->route('notas.show', $note->id)->with('success', 'added note!!');
            }else{
                return redirect()->route('notas.create')->with('error', 'Both fields required');
            }
        }
    }

    public function show($nota)
    {
        $nota = Note::where('id', $nota)->where('user_id', auth()->id())->firstOrFail();
        return view('notas.show', compact("nota"));
    }
    public function showPag()
    {
        $note = Note::where('user_id', auth()->id())->simplePaginate(1);
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
        if ($note) {
            $note->delete();
            return redirect("notas")->with('success', 'deleted!!');
        } else {
            return redirect("notas/$id")->with('error', 'error :(');
        }
    }
}
