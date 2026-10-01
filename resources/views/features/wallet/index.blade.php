<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Wallet</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="p-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createKategoriModal">
                                Tambah Wallet
                            </button>
                            @include('partials.wallet.create')
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Wallet</th>
                                            <th>Balance</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($wallet->count() > 0)
                                            @foreach ($wallet as $item)
                                                <tr>
                                                    <td>{{ $wallet->firstItem() + $loop->index }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ Number::currency($item->balance, in: 'IDR', locale: 'id') }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('wallet.edit', $item->id) }}"
                                                            class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#editWalletModal{{ $item->id }}">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteWalletModal{{ $item->id }}">Delete</button>
                                                    </td>
                                                </tr>
                                                @include('partials.wallet.edit', ['wallet' => $item])
                                                @include('partials.wallet.delete', ['wallet' => $item])
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="2">No wallets found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $wallet->links() }}
        </section>

    </div>
</x-app-layout>
