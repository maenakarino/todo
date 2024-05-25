<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;

class Todocontroller extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', compact('todos'));
    }

    public function store(Request $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo);

        return redirect('/')->with('message', 'Todoを作成しました');
    }

}