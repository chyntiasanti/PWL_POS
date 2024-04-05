@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('barang/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                <option value="">- Semua -</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->kategori_id}}">{{ $item->kategori_nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Kode</small>
                        </div>
                    </div>
                </div>
            </div>            
            <table class="table-bordered table-striped table-hover table-sm table" id="table_barang">
                <thead>
                    <tr>
                        <th>ID Barang</th>
                        <th>ID Kategori</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('js')
<script>
$(document).ready(function() {
    var dataTable = $('#table_barang').DataTable({
        serverSide: true,
        ajax: {
            "url": "{{ url('barang/list') }}",
            "dataType": "json",
            "type": "POST",
            "data": function (d) {
                d.barang_id = $('#nama_barang').val(); // Memperbaiki nama variabel
            }
        },
        columns: [
            {
                data: "barang_id",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "kategori_id",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "barang_kode",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "barang_nama",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "harga_beli",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "harga_jual",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "aksi",
                className: "",
                orderable: false,
                searchable: false
            }
        ]
    });

    $('#nama_barang').on('change', function() {
        dataTable.ajax.reload(); // Memperbaiki nama variabel
    });

});
</script>
@endpush
