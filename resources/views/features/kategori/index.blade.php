<x-app-layout>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kategori</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
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
                                Tambah Kategori
                            </button>
                            @include('partials.kategori.create')
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($kategori->count() > 0)
                                            @foreach ($kategori as $item)
                                                <tr>
                                                    <td>{{ $kategori->firstItem() + $loop->index }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <a href="{{ route('kategori.edit', $item->id) }}"
                                                            class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#editKategoriModal{{ $item->id }}">Edit</a>
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteKategoriModal{{ $item->id }}">Delete</button>
                                                    </td>
                                                </tr>
                                                @include('partials.kategori.edit', ['kategori' => $item])
                                                @include('partials.kategori.delete', ['kategori' => $item])
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="2">No categories found.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $kategori->links() }}
        </section>

    </div>
</x-app-layout>
