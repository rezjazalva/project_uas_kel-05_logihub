<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Aset</title>
    <style>
        /* Gaya dasar untuk container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f5ff;
            /* Warna biru muda */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk judul halaman */
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        /* Gaya untuk label */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Gaya untuk input */
        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        /* Gaya untuk tombol submit */
        button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Tambah Aset</h1>
        <form action="{{ route('admin.asset.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Formulir untuk membuat aset -->
            <label for="nama_item">Nama Item:</label>
            <input type="text" name="nama_item" value="{{ old('nama_item') }}">

            <label for="jenis_item">Jenis Item:</label>
            <input type="text" name="jenis_item" value="{{ old('jenis_item') }}">

            <label for="kode_item">Kode Item:</label>
            <input type="text" name="kode_item" value="{{ old('kode_item') }}">

            <label for="stok_item">Stok Item:</label>
            <input type="number" name="stok_item" value="{{ old('stok_item') }}">

            <label for="image">Gambar:</label>
            <input type="file" name="image">

            <!-- Tambahkan atribut lain yang ingin Anda tambahkan -->

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>