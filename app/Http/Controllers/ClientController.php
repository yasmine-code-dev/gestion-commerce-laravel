<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use Illuminate\Http\Request;
use App\Models\client;
use Illuminate\Support\Facades\Hash;
class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=client::paginate(10);
        return view('clients.index',compact('clients'));
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $validatedData = $request->validate();
       
        $validatedData['password']=Hash::make($request->password);
        client::create($validatedData);
       
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $client = client::findOrFail($id);
        return view('clients.edit',compact("client"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $client)
    {
        $client=client::findOrFail($client);
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->adresse=$request->adresse;
        $client->ville=$request->ville;
        $client->tel=$request->tel;
        $client->email=$request->email;
        $client->ice=$request->ice;
        $client->password=Hash::make($request->password);
        $client->save();
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client=client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index'); 
    }
}
