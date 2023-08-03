<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Aset</title>
    <style>
        /* Gaya dasar untuk container */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f5ff;
            /* Warna biru muda */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Gaya untuk judul halaman */
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Gaya untuk label */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Gaya untuk input */
        input[type="text"],
        input[type="number"] {
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
        <h1>Edit Aset</h1>
        <form action="{{ route('admin.aset.update', ['asset' => $aset]) }}" method="post">
            @csrf
            @method('PUT')
            <!-- Formulir untuk mengedit data aset -->
            <div>
                <label for="nama_item">Nama Item:</label>
                <input type="text" name="nama_item" value="{{ $aset->nama_item }}">
            </div>
            <div>
                <label for="jenis_item">Jenis Item:</label>
                <input type="text" name="jenis_item" value="{{ $aset->jenis_item }}">
            </div>
            <div>
                <label for="kode_item">Kode Item:</label>
                <input type="text" name="kode_item" value="{{ $aset->kode_item }}">
            </div>
            <div>
                <label for="stok_item">Stok Item:</label>
                <input type="number" name="stok_item" value="{{ $aset->stok_item }}">
            </div>
            <!-- Tambahkan atribut lain yang ingin Anda sunting -->
            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>

</html>