<?php

namespace App\Http\Controllers;

use App\Models\Test2;
use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function index() {
        $test2 = Test2::all();
        return view('test2.index', compact(['test2']));
    }

    public function create()
    {
        return view('test2.create');
    }

    public function store(Request $request)
    {
        Test2::create($request->except(['_token', 'submit']));
        return redirect('/test2');
    }

    public function edit($id)
    {
        $test2 = Test2::find($id);
        return view('test2.edit', compact(['test2']));
    }

    public function update($id, Request $request)
    {
        $test2 = Test2::find($id);
        $test2->update($request->except(['_token', 'submit']));
        return redirect('/test2');
    }

    public function destroy($id)
    {
        $test2 = Test2::find($id);
        $test2->delete();
        return redirect('/test2');
    }
}
