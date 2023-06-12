<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo 'index';
        $author = Author::all();
        // dd($author);
        return view('authors.index',['authors'=>$author]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
