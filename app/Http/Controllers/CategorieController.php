<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categorie;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::paginate(10);
        return view('categories.index',compact('categories'));
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $categorie=new Categorie();
       $categorie->categorie=$request->categorie;
       $categorie->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**hg
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $categorie = Categorie::findOrFail($id);
        return view('categories.edit',compact("categorie"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $categorie)
    {
        $categorie=Categorie::findOrFail($categorie);
        $categorie->categorie=$request->categorie;
        $categorie->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie=Categorie::findOrFail($id);
        $categorie->delete();
        return redirect()->route('categories.index'); 
    }
}
