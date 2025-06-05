<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function clients()
    {
        $clients = Client::all();
        return view('clients', compact('clients'));
    }

    public function index()
    {
        $clients = Client::all();
        return view('clients', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        Client::create($request->all());
        return redirect()->back()->with('success', 'Client added successfully.');
    }

    public function edit(Client $client)
    {
        return view('edit-client', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $client->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back()->with('success', 'Client deleted successfully.');
    }
}
