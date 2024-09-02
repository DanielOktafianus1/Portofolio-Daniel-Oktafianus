<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Education::get();
        return view('admin.education.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $education = Education::create([
            'pendidikan' => $request->pendidikan,
            'periode' => $request->periode,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('education.index');
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
        $edit = Education::find($id);
        return view('admin.education.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edit = Education::find($id);
        $edit->update([
            'pendidikan' => $request->pendidikan,
            'periode' => $request->periode,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Education::where('id', $id)->delete();
        return redirect()->to('education')->with('massage', 'Data berhasil di hapus');
    }
}
