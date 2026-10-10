<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Wallet;

class DashboardController extends Controller
{
    public function index()
    {
        $total = Wallet::sum('balance');
        $transaction = Transaction::selectRaw("
    SUM(CASE WHEN type = 'expense' THEN amount ELSE 0 END) as total_expense,
    SUM(CASE WHEN type = 'income' THEN amount ELSE 0 END) as total_income
")->first();

        $totalExpense = $transaction->total_expense ?? 0;
        $totalIncome  = $transaction->total_income ?? 0;
        return view('dashboard', compact('total', 'totalExpense', 'totalIncome'));
    }
}
