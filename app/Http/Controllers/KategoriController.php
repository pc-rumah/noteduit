<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = $request->user()->Kategori()->paginate(5);
        return view('features.kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $request->user()->kategori()->create($validated);

        toast('Berhasil Menambah Kategori', 'success')->timerProgressBar();
        return redirect()->back();
    }

    public function update(Request $request, Kategori $kategori)
    {
        $this->authorize('update', $kategori);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $kategori->update($validated);

        toast('Berhasil Mengupdate Kategori', 'success')->timerProgressBar();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $this->authorize('delete', $kategori);
        $kategori->delete();

        toast('Berhasil Menghapus Kategori', 'success')->timerProgressBar();
        return redirect()->back();
    }
}
