<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Cari data berdasarkan parameter $id dari URL
        $mahasiswa = Mahasiswa::find($id);
        // Jika data tidak ditemukan, kembalikan 404
        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }
        // Jika data ditemukan, kembalikan data JSON
        return response()->json($mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): JsonResponse
    {
        // Cari data berdasarkan $id dari URL
        $mahasiswa = Mahasiswa::find($id);

        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }

        // Update data
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }
        $mahasiswa->delete();
        return response()->json(['message' => 'Mahasiswa deleted successfully']);
    }
}
