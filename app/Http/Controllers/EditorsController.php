<?php

namespace App\Http\Controllers;

use App\Models\Editors;
use Illuminate\Http\Request;

class EditorsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact=Editors::with('editor')->get();
        return view('contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $contacs=Editors::create($request->all());
        return redirect()->route('contacts.index', compact('contacs'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact=Editors::findOrFail($id);
        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact=Editors::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'phone'=>'required',
            'editor_id'=>'required'
        ]);
        $contact=Editors::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact=Editors::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
