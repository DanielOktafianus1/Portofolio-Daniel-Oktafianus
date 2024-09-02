<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exps = Experience::get();

        return view('admin.experience.index', compact('exps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('picture')) {
            $foto = $request->picture->store('gambar', 'public');
        }
        $exp = Experience::create([
            'exp' => $request->exp,
            'position' => $request->position,
            'periode' => $request->periode,
            'deskripsi' => $request->deskripsi,
            'gambar' => $foto
        ]);
        return redirect()->route('experience.index');
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
        $edit = Experience::findOrFail($id);
        return view('admin.experience.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Experience::findOrFail($id);

        if ($request->hasFile('picture')) {
            $foto = $request->picture->store('gambar', 'public');
        }
        $edit->update([
            'exp' => $request->exp,
            'position' => $request->position,
            'periode' => $request->periode,
            'deskripsi' => $request->deskripsi,
            'gambar' => $foto
        ]);
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroy = Experience::findOrFail($id);
        $destroy->delete();
        return redirect()->to('experience')->with('info', 'Experience have been deleted');
    }
}
