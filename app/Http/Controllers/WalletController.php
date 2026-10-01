<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateWallet;
use App\Http\Requests\WalletRequest;
use App\Models\Wallet;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallet = Wallet::paginate(5);
        return view('features.wallet.index', compact('wallet'));
    }

    public function store(WalletRequest $request)
    {
        $validated = $request->validated();

        Wallet::create($validated);
        toast('berhasil menambah wallet', 'success')->timerProgressBar();
        return redirect()->back();
    }

    public function update(UpdateWallet $request, Wallet $wallet)
    {
        $validated = $request->validated();

        $wallet->update($validated);
        toast('Berhasil Mengupdate Wallet', 'success')->timerProgressBar();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        $wallet->delete();
        toast('Berhasil Menghapus Wallet', 'success')->timerProgressBar();
        return redirect()->back();
    }
}
