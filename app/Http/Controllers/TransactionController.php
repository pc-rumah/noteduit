<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaction;
use App\Models\Kategori;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::paginate(5);
        $kategori = Kategori::pluck('name', 'id');
        $wallet = Wallet::select('id', 'name', 'balance')->get();

        return view('features.transaction.index', compact('transaction', 'kategori', 'wallet'));
    }

    public function store(StoreTransaction $request, TransactionService $service)
    {
        try {
            $service->handle($request->validated());
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
