<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function create()
    {
        return "Menampilkan form tambah data matakuliah";
    }

    public function store(Request $request)
    {
        return "Proses menyimpan data matakuliah";
    }

    public function show(string $id = null)
    {
        if ($id) {
            return "Anda mengakses matakuliah " . $id;
        }

        return "Masukkan kode matakuliah!";
    }

    public function edit(string $id)
    {
        return 'Menampilkan form edit matakuliah ' . $id;
    }

    public function update(Request $request, string $id)
    {
        return 'Mengupdate data matakuliah ' . $id;
    }

    public function destroy(string $id)
    {
         return 'Menghapus data matakuliah ' . $id;
    }
}


