@extends('layouts.template')
@section('content')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah</a>
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
                            <select name="kategori_kode" id="kategori_kode" class="form-control" required>
                                <option value="">- Semua -</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->kategori_kode }}">{{ $item->kategori_kode }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Kode</small>
                        </div>
                    </div>
                </div>
            </div>            
            <table class="table-bordered table-striped table-hover table-sm table" id="table_kategori">
                <thead>
                    <tr>
                        <th>ID</th><th>Kode</th><th>Nama</th><th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@endsection
@push('css')
@endpush
@push('js')
<script>
$(document).ready(function() {
    var dataLevel = $('#table_kategori').DataTable({
        serverSide: true,
        ajax: {
            "url": "{{ url('kategori/list') }}",
            "dataType": "json",
            "type": "POST",
            "data": function (d) {
                d.level_id = $('#kategori_id').val();
            }
        },
        columns: [
            {
                data: "kategori_id",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "kategori_kode",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "kategori_nama",
                className: "",
                orderable: true,
                searchable: true
            },
            {
                data: "aksi",
                className: "",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
            }
        ]
    });

    $('#kategori_id').on('change', function() {
        dataKategori.ajax.reload();
    });

});
</script>
@endpush