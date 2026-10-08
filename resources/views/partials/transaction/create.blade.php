<div class="modal fade text-left" id="createTransactionModal" tabindex="-1" role="dialog"
    aria-labelledby="createTransactionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTransactionModalLabel">Add Transaction</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('transaction.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="transactionName">Transaction Name</label>
                        <input type="text" id="transactionName" name="name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            placeholder="Enter transaction name" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="transactionType">Transaction Type</label>
                        <fieldset class="form-group">
                            <select class="form-select" name="type" id="transactionType" required>
                                <option value="">-- Pilih Jenis Transaksi --</option>
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                                <option value="transfer">Transfer</option>
                            </select>
                        </fieldset>
                    </div>

                    {{-- Destination Wallet --}}
                    <div class="form-group mt-3" id="destinationWalletGroup" style="display: none;">
                        <label for="destinationWallet">Transfer Ke</label>

                        <fieldset class="form-group">
                            <select class="form-select" name="destination_wallet_id" id="destinationWallet">
                                <option value="">-- Pilih Wallet Tujuan --</option>

                                @foreach ($wallet as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="transactionCategory">Transaction Category</label>
                        <fieldset class="form-group">
                            <select class="form-select" name="kategori_id" id="transactionCategory" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($kategori as $id => $name)
                                    <option value="{{ $id }}" @selected(old('kategori_id') == $id)>
                                        {{ $name }} </option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="Wallet">Wallet</label>
                        <fieldset class="form-group">
                            <select class="form-select" name="wallet_id" id="Wallet" required>
                                <option value="">-- Pilih Dompet --</option>
                                @foreach ($wallet as $item)
                                    <option value="{{ $item->id }}" @selected(old('wallet_id') == $item->id)>
                                        {{ $item->name }} - {{ $item->balance }} </option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="transactionDate">Transaction Date</label>
                        <fieldset class="form-group">
                            <input type="date" id="transactionDate" name="transaction_date"
                                class="form-control @error('transaction_date') is-invalid @enderror"
                                value="{{ date('Y-m-d') }}" required autofocus>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="transactionAmount">Amount</label>
                        <fieldset class="form-group">
                            <input type="number" min="1" id="transactionAmount" name="amount"
                                class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}"
                                required autofocus>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="transactionDescription">Description</label>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="transactionDescription" name="description" rows="3"></textarea>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
