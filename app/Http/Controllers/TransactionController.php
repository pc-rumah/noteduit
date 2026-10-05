<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaction;
use App\Models\Kategori;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::paginate(5);
        $kategori = Kategori::pluck('name', 'id');
        $wallet = Wallet::select('id', 'name', 'balance')->get();

        return view('features.transaction.index', compact('transaction', 'kategori', 'wallet'));
    }

    public function store(StoreTransaction $request)
    {
        $validated = $request->validated();

        try {
            DB::transaction(function () use ($validated) {
                $transaction = Transaction::create($validated);

                $wallet = Wallet::where('id', $validated['wallet_id'])->lockForUpdate()->firstOrFail();

                // cek saldo
                if (in_array($validated['type'], ['expense', 'transfer'])) {
                    if ($wallet->balance < $validated['amount']) {
                        throw new \Exception('Saldo tidak mencukupi untuk melakukan transaksi ini.');
                    }
                }

                if ($validated['type'] === 'income') {
                    $wallet->increment('balance', $validated['amount']);
                } elseif ($validated['type'] === 'expense') {
                    $wallet->decrement('balance', $validated['amount']);
                } elseif ($validated['type'] === 'transfer') {
                    $destinationWallet = Wallet::findOrFail($validated['destination_wallet_id']);
                    $wallet->decrement('balance', $validated['amount']);
                    $destinationWallet->increment('balance', $validated['amount']);
                }
            });

            toast('Transaksi Berhasil', 'success')->timerProgressBar();
            return redirect()->back();
        } catch (\Exception $e) {
            toast($e->getMessage(), 'error')->timerProgressBar();
            return redirect()->back()->withInput();
        }
    }


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
