<!DOCTYPE html>
<html>
<head>
    <title>CRUD Produk</title>
    <style>
        body { font-family: Arial, sans-serif; width: 80%; margin: auto; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
        form { margin: 10px 0; }
        input[type=text], input[type=number] {
            padding: 5px; margin: 5px;
        }
        button { padding: 6px 12px; margin: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Manajemen Produk</h1>

    <!-- Form Tambah Produk -->
    <h3>Tambah Produk Baru</h3>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="Nama Produk" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <button type="submit">Tambah</button>
    </form>

    <!-- Tabel Produk -->
    <h3>Daftar Produk</h3>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($produk->count() > 0)
        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            @foreach($produk as $i => $p)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>
                        <!-- Form Edit -->
                        <form action="{{ route('produk.update', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="text" name="nama" value="{{ $p->nama }}" required>
                            <input type="number" name="harga" value="{{ $p->harga }}" required>
                            <input type="number" name="stok" value="{{ $p->stok }}" required>
                            <button type="submit">Update</button>
                        </form>

                        <!-- Form Delete -->
                        <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin hapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Tidak ada produk.</p>
    @endif
</body>
</html>
