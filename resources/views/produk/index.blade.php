<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <p><a href="{{ route('logout') }}">Logout</a></p>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->deskripsi }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->stok }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>