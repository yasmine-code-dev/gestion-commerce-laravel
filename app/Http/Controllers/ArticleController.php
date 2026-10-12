<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\SousCategorie;

class ArticleController extends Controller
{
    public function index()
{
    $articles = Article::with('sous_categorie')->paginate(10);
    return view('articles.index', compact('articles'));
}


    public function create()
    {
        $souscategories = SousCategorie::all();
        return view('articles.create', compact('souscategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required|string|max:255',
            'prix_achat_ht' => 'required|numeric',
            'prix_vente_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'stock' => 'required|integer',
            'sous_categorie_id' => 'required|exists:sous_categories,id',
            'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $article = new Article();
        $article->designation = $request->designation;
        $article->prix_achat_ht = $request->prix_achat_ht;
        $article->prix_vente_ht = $request->prix_vente_ht;
        $article->tva = $request->tva;
        $article->stock = $request->stock;
        $article->sous_categorie_id = $request->sous_categorie_id;

        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles', 'public');
        }

        $article->save();

        return redirect()->route('articles.index')
                         ->with('success', 'Article ajouté avec succès');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $souscategories = SousCategorie::all();

        return view('articles.edit', compact('article', 'souscategories'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'designation' => 'required|string|max:255',
            'prix_achat_ht' => 'required|numeric',
            'prix_vente_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'stock' => 'required|integer',
            'sous_categorie_id' => 'required|exists:sous_categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $article->update($request->except('image'));

        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles', 'public');
            $article->save();
        }

        return redirect()->route('articles.index')
                         ->with('success', 'Article modifié avec succès');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')
                         ->with('success', 'Article supprimé');
    }
}
