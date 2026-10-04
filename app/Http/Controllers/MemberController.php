<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    private array $members = [
        ['id' => 1, 'nama' => 'Budi Santoso', 'nim' => '2021001', 'email' => 'budi@example.com', 'nomor_telepon' => '081234567890', 'alamat' => 'Jl. Merdeka No. 1', 'status' => 'aktif'],
        ['id' => 2, 'nama' => 'Siti Aminah', 'nim' => '2021002', 'email' => 'siti@example.com', 'nomor_telepon' => '081298765432', 'alamat' => 'Jl. Sudirman No. 5', 'status' => 'aktif'],
        ['id' => 3, 'nama' => 'Andi Wijaya', 'nim' => '2019010', 'email' => 'andi@example.com', 'nomor_telepon' => '085711112222', 'alamat' => 'Jl. Pahlawan No. 9', 'status' => 'nonaktif'],
    ];

    public function index()
    {
        $members = $this->members;

        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy, belum tersimpan ke database).");
    }

    // method show, edit, update, destroy: biarkan seperti sebelumnya
}