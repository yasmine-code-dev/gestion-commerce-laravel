<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SousCategorie;
use App\Models\Categorie;

class SousCategorieController extends Controller
{
    public function index()
    {
        $souscategories = SousCategorie::with('categorie')->paginate(10);
        return view('souscategories.index', compact('souscategories'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('souscategories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sous_categorie' => 'required',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        SousCategorie::create([
    'sous_categorie' => $request->sous_categorie,
    'categorie_id' => $request->categorie_id,
]);


        return redirect()->route('souscategories.index');
    }

    public function edit($id)
{
    $souscategorie = SousCategorie::findOrFail($id);
    $categories = Categorie::all();

    return view('souscategories.edit', compact('souscategorie', 'categories'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'sous_categorie' => 'required',
        'categorie_id' => 'required|exists:categories,id',
    ]);

    $souscategorie = SousCategorie::findOrFail($id);

    $souscategorie->update([
        'sous_categorie' => $request->sous_categorie,
        'categorie_id' => $request->categorie_id,
    ]);

    return redirect()->route('souscategories.index');
}


  public function destroy(string $id)
    {
        $souscategorie=SousCategorie::findOrFail($id);
        $souscategorie->delete();
        return redirect()->route('souscategories.index'); 
    }

}
