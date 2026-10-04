<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaction;
use App\Models\Kategori;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::paginate(5);
        $kategori = Kategori::pluck('name', 'id');
        $wallet = Wallet::select('id', 'name')->get();

        return view('features.transaction.index', compact('transaction', 'kategori', 'wallet'));
    }

    public function store(StoreTransaction $request)
    {
        $validated = $request->validated();

        Transaction::create($validated);
        toast('Transaksi Berhasil', 'success')->timerProgressBar();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
