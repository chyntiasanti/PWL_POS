@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('stok/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error')}}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <select name="user_id" id="user_id" class="form-control" required>
                            <option value="">- Semua -</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->user_id}}">{{ $item->username}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Username</small>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_stok">
            <thead>
                <tr><th>ID</th><th>ID Barang</th><th>ID User</th><th>Tanggal</th><th>Jumlah</th><th>Aksi</th></tr>
            </thead>
        </table>
    </div>
</div>

@endsection
@push('css')
@endpush
@push('js')
<script>
$(document).ready(function() {
    var dataStok = $('#table_stok').DataTable({
        serverSide: true, // serverSide: true, jika ingin menggunakan server
        //processing: true,
        ajax: {
            "url": "{{ url('stok/list') }}",
            "dataType": "json",
            "type": "POST",
            "data": function (d) {
                d.user_id = $('#user_id').val();
            }
        },
        columns: [
            {
                data: "stok_id", 
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "barang.barang_id",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "user.user_id",
                className: "",
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari
            },
            {
                data: "stok_tanggal",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
            },
            {
                data: "stok_jumlah",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
            },
            {
                data: "aksi",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
            }
        ]
    });

    $('#user_id').on('change', function() {
        dataStok.ajax.reload();
    });

});
</script>
@endpush
