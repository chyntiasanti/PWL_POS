<!DOCTYPE html>
<head>
    Data Ubah
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="{{route('/user')}}">Kembali</a>
    <br>
    <form method="post" action="{{route('/user/ubah_simpan', $data->user_id)}}">
        {{ csrf_field()}}
        {{ method_field('PUT')}}

        <Label>Username</Label>
        <input type="text" name="username" value="{{ $data->username}}">
        <br>

        <Label>Nama</Label>
        <input type="text" name="nama" value="{{ $data->nama}}">
        <br>

        <Label>Level ID</Label>
        <input type="number" name="level_id" value="{{ $data->level_id}}">
        <br>
        
        <input type="submit" name="btn btn-success" id="Ubah">
    </form>
</body>