<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $link = Link::get();
        return view('admin.link.index', compact('link'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $link = Link::create([
            'Name_link' => $request->Name_link,
            'links' => $request->links
        ]);
        return redirect()->route('link.index');
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
        $link = Link::findOrFail($id);
        return view('admin.link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $link = Link::findOrFail($id);
        $link->update([
            'Name_link' => $request->Name_link,
            'links' => $request->links
        ]);
        return redirect()->route('link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Link::findOrFail($id);
        $destroy->delete();
        return redirect()->to('link')->with('info', 'Skill have been deleted');
    }
}
