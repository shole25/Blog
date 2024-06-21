<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories') ;
    }
    public  function create()
    {
        return view('categories-create');
    }
public function store(Request $request)
{
    $category=Category::create([
        'title'=>$request->input('title'),
    ]);
    return redirect(route('categories.index'));
}}
