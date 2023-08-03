<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <style>
        /* Gaya dasar untuk container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Gaya untuk judul halaman */
        h1 {
            margin-bottom: 20px;
        }

        /* Gaya untuk form-group */
        .form-group {
            margin-bottom: 20px;
        }

        /* Gaya untuk label */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Gaya untuk select */
        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Gaya untuk tombol submit */
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Item</h1>
        <form action="{{ route('admin.permohonan.update', ['id' => $item->id]) }}" method="post">
            @csrf
            <input type="hidden" name="item_id" value="{{ $item->id }}">
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="disetujui" @if($item->status == 'disetujui') selected @endif>Disetujui</option>
                    <option value="diproses" @if($item->status == 'diproses') selected @endif>Diproses</option>
                    <option value="sedang dipinjam" @if($item->status == 'sedang dipinjam') selected @endif>Sedang Dipinjam</option>
                    <option value="dikembalikan" @if($item->status == 'dikembalikan') selected @endif>Dikembalikan</option>
                    <option value="dibatalkan" @if($item->status == 'dibatalkan') selected @endif>Dibatalkan</option>
                </select>
            </div>
            <!-- Tambahkan atribut lain yang ingin Anda sunting -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>

</html>