<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        // String categories =Category-databasede butun Catecory modelinin categories tabledeki butun elementleri chagirir
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //view uchun
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);
        $category=Category::create($validated);
        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=Category::findOrFail($id);
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //view qaytarmaq uchundur
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //store+show kimi
        $validated = $request->validate([
            'title' => 'required',
        ]);
        $category=Category::findOrFail($id);
       $category->update($validated);
       return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return response()->json(null,204);
    }
}
