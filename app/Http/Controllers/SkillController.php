<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Skill::get();
        return view('admin.skills.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datas = Skill::create([
            'nama_skill' => $request->nama_skill,
            'deskripsi' => $request->deskripsi

        ]);
        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datas = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $skill->update([

            'nama_skill' => $request->nama_skill,
            'deskripsi' => $request->deskripsi

        ]);
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroy = Skill::findOrFail($id);
        $destroy->delete();
        return redirect()->to('skills')->with('info', 'Skill have been deleted');
    }
}
