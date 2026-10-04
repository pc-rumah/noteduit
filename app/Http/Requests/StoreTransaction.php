<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTransaction extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:income,expense,transfer'],
            'amount' => ['required', 'integer', 'min:1'],
            'description' => ['nullable', 'string'],
            'transaction_date' => ['required', 'date'],
            'wallet_id' => ['required', 'integer', 'exists:wallets,id'], // sama dengan exists kategori
            'destination_wallet_id' => [
                'nullable',
                'required_if:type,transfer',
                'integer',
                'different:wallet_id',
                'exists:wallets,id',
            ],
            'kategori_id' => ['required', 'integer', 'exists:kategori,id'], // exists disini berfungsi untuk validasi id kategori yang di pilih ada di tabel kategori
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama transaksi wajib diisi.',
            'name.string' => 'Nama transaksi harus berupa teks.',
            'name.max' => 'Nama transaksi tidak boleh lebih dari 255 karakter.',

            'type.required' => 'Tipe transaksi wajib dipilih.',
            'type.in' => 'Tipe transaksi harus berupa income, expense, atau transfer.',

            'amount.required' => 'Jumlah transaksi wajib diisi.',
            'amount.integer' => 'Jumlah transaksi harus berupa angka bulat.',
            'amount.min' => 'Jumlah transaksi minimal adalah 1.',

            'description.string' => 'Deskripsi harus berupa teks.',

            'transaction_date.required' => 'Tanggal transaksi wajib diisi.',
            'transaction_date.date' => 'Format tanggal transaksi tidak valid.',

            'wallet_id.required' => 'Dompet utama wajib dipilih.',
            'wallet_id.integer' => 'ID dompet harus berupa angka.',
            'wallet_id.exists' => 'Dompet yang dipilih tidak ditemukan.',

            'destination_wallet_id.required_if' => 'Dompet tujuan wajib dipilih jika tipe transaksi adalah transfer.',
            'destination_wallet_id.integer' => 'ID dompet tujuan harus berupa angka.',
            'destination_wallet_id.different' => 'Dompet tujuan tidak boleh sama dengan dompet asal.',
            'destination_wallet_id.exists' => 'Dompet tujuan yang dipilih tidak ditemukan.',

            'kategori_id.required' => 'Kategori wajib dipilih.',
            'kategori_id.integer' => 'ID kategori harus berupa angka.',
            'kategori_id.exists' => 'Kategori yang dipilih tidak ditemukan.',
        ];
    }
}
