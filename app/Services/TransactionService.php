<?php

namespace App\Services;

use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Exception;

class TransactionService
{
    public function handle(array $data): Transaction
    {
        return DB::transaction(function () use ($data) {
            $wallet = Wallet::where('id', $data['wallet_id'])->lockForUpdate()->firstOrFail();

            $this->validateBalance($wallet, $data['type'], $data['amount']);
            $this->applyBalanceChange($wallet, $data);

            return Transaction::create($data);
        });
    }

    private function validateBalance(Wallet $wallet, string $type, float|int $amount): void
    {
        if (in_array($type, ['expense', 'transfer']) && $wallet->balance < $amount) {
            throw new Exception('Saldo tidak mencukupi untuk melakukan transaksi ini.');
        }
    }

    private function applyBalanceChange(Wallet $wallet, array $data): void
    {
        $amount = $data['amount'];

        match ($data['type']) {
            'income' => $wallet->increment('balance', $amount),
            'expense' => $wallet->decrement('balance', $amount),
            'transfer' => $this->handleTransfer($wallet, $data['destination_wallet_id'], $amount),
            default => throw new Exception('Tipe transaksi tidak valid.'),
        };
    }

    private function handleTransfer(Wallet $sender, int $destinationWalletId, float|int $amount): void
    {
        $receiver = Wallet::where('id', $destinationWalletId)->lockForUpdate()->firstOrFail();
        $sender->decrement('balance', $amount);
        $receiver->increment('balance', $amount);
    }
}
