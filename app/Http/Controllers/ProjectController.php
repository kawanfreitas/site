<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        if (isset($search)) {

            $nome = Project::where('title', 'LIKE', '%'.$search.'%');

            return redirect()->route('welcome', ['projects' => $nome]);

        } else {

            $cards = Project::all();

            return view('welcome', ['projects' => $cards]);

        }

    }

    public function create()
    {
        $id = User::all();

        return view('create', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $card = new Project();
        $card->title = $request->title;
        $card->description = $request->description;

        $user = auth()->user();
        $card->user_id = $user->id;

        $card->save();

        return
            redirect()
            ->route('welcome')
            ->with('msg', 'Card criado com sucesso');
    }

    public function show($id, Request $request)
    {
       $project = Project::find($id);

       $user_id = $request->user_id;
       $user = User::find($user_id);

        return view('layout.show', ['project' => $project, 'user' => $user]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        return view('dashboard', ['user' => $user]);
    }

    public function destroy(Request $request, $id)
    {
        $pro = Project::find($id);

        $pro->delete();

        return redirect()
            ->route('dashboard')
            ->with('msg', 'card ' .$pro->title. ' deletado com sucesso');
    }
}
