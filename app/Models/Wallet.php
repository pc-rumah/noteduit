<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = 'wallets';
    protected $fillable = ['name', 'number', 'balance'];

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
