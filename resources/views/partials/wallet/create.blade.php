<div class="modal fade text-left" id="createKategoriModal" tabindex="-1" role="dialog"
    aria-labelledby="createKategoriModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createKategoriModalLabel">Tambah Wallet</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('wallet.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategoriName">Wallet Name</label>
                        <input type="text" id="kategoriName" name="name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            placeholder="Masukkan nama wallet" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="walletnumber">Number</label>
                        <input type="number" id="walletnumber" name="number"
                            class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}"
                            placeholder="Masukkan nomor wallet" required autofocus>
                        @error('number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="startbalance">Start Balance</label>
                        <input type="number" id="startbalance" min="1" name="balance"
                            class="form-control @error('balance') is-invalid @enderror" value="{{ old('balance') }}"
                            placeholder="Masukkan saldo awal" required autofocus>
                        @error('balance')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
