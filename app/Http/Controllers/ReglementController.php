<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reglement;
use App\Models\client;


class ReglementsController extends Controller
{
    public function index()
    {
        $reglements =reglement::with('client')->get();
        return view('reglements.index', compact('reglements'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('reglements.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'clientid' => 'required|exists:categories,id',
        ]);

        reglement::create([
    'nom' => $request->nom,
    'client_id' => $request->client_id,
]);


        return redirect()->route('reglements.index');
    }

    public function edit($id)
{
    $reglement = reglement::findOrFail($id);
    $clients = Client::all();

    return view('reglements.edit', compact('reglement', 'clients'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'client_id' => 'required|exists:clients,id',
    ]);

    $reglement = reglement::findOrFail($id);

    $reglement->update([
        'client' => $request->client,
        'client_id' => $request->client_id,
    ]);

    return redirect()->route('reglements.index');
}


  public function destroy(string $id)
    {
        $reglement=reglement::findOrFail($id);
        $reglement->delete();
        return redirect()->route('reglements.index'); 
    }

}
