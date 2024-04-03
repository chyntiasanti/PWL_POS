
@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Edit')

{{-- Content body: main page content --}}

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit level</h3>
            </div>

            <form  method="post" action="../{{$data->level_id}}">

                {{csrf_field()}}
                {{method_field('PUT')}}

                <div class="card-body">
                    <div class="form-group">
                        <label for="level_kode">Level Nama</label>
                        <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{$data->level_kode}}">
                    </div>
                    <div class="form-group">
                        <label for="level_nama">Level Nama</label>
                        <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{$data->level_nama}}">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection