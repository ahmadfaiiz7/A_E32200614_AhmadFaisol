<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementControllers extends Controller
{
    public function index()
    {
        //return "Halo ini adalah metode index,dalam controller user.";
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Ahmad Faisol";

        $pelajaran = ["Algoritma & Pemrogramana","Kalkulus","Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data userdengan id=" . $id;
    }

    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }

    public function update(Request $request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }

    public function destroy($id)
    {
        return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" . $id;
    }

}