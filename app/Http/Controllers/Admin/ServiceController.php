<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Tampilkan daftar layanan
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    // Tampilkan form tambah layanan
    public function create()
    {
        return view('admin.services.create');
    }

    // Simpan layanan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'        => 'required|string|max:100',
            'price'       => 'required|integer|min:0',
            'description' => 'required|string',
        ]);

        // Simpan data
        Service::create($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Tampilkan form edit layanan
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    // Update layanan
    public function update(Request $request, Service $service)
    {
        // Validasi input
        $request->validate([
            'name'        => 'required|string|max:100',
            'price'       => 'required|integer|min:0',
            'description' => 'required|string',
        ]);

        // Update data
        $service->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }

    // Hapus layanan
    public function destroy(Service $service)
    {
        $service->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil dihapus.');
    }
}
