<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Transaction</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transaction</li>
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
                                data-bs-target="#createTransactionModal">
                                Tambah Transaction
                            </button>
                            @include('partials.transaction.create')
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Kategori</th>
                                            <th>Tipe</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($transaction->count() > 0)
                                            @foreach ($transaction as $item)
                                                <tr>
                                                    <td>{{ $transaction->firstItem() + $loop->index }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->kategori->name }}</td>
                                                    <td>{{ $item->type }}</td>
                                                    <td>{{ Number::currency($item->amount, in: 'IDR', locale: 'id') }}
                                                    </td>
                                                    <td>{{ $item->transaction_date }}</td>
                                                    <td>
                                                        <a href="{{ route('transaction.edit', $item->id) }}"
                                                            class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#editTransactionModal{{ $item->id }}">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteTransactionModal{{ $item->id }}">Delete</button>
                                                    </td>
                                                </tr>
                                                @include('partials.transaction.edit', [
                                                    'transaction' => $item,
                                                ])
                                                @include('partials.transaction.delete', [
                                                    'transaction' => $item,
                                                ])
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="2">No transactions found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $transaction->links() }}
        </section>

    </div>
</x-app-layout>
