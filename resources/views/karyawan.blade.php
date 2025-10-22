<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abaut Database karyawan</title>
</head>
<body>
    <h1>Abaut Database karyawan</h1>
    <p>Ini adalah halaman abaut untuk database karyawan.</p>

    <h2>Tabel karyawan</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>No Telepon</th>
                <th>Dibuat Pada</th>
                <th>Diperbarui Pada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawan as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->nama_lengkap }}</td>
                <td>{{ $k->alamat }}</td>
                <td>{{ $k->usia }}</td>
                <td>{{ $k->no_tlfn }}</td>
                <td>{{ $k->created_at }}</td>
                <td>{{ $k->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
