<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        /* Gaya untuk tampilan invoice */
        /* Anda dapat menyesuaikan gaya sesuai kebutuhan Anda */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-details .left {
            flex: 1;
        }

        .invoice-details .right {
            flex: 1;
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Invoice</h1>
    <div class="invoice-details">
        <div class="left">
            <strong>No. Invoice:</strong> {{ $peminjaman->id }}<br>
            <strong>Tanggal:</strong> {{ $peminjaman->created_at->format('d M Y') }}<br>
        </div>
        <div class="right">
            <strong>Nama Peminjam:</strong> {{ $peminjaman->user->name }}<br>
            <strong>Tujuan Peminjaman:</strong> {{ $peminjaman->tujuan }}<br>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Item</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $peminjaman->nama_item }}</td>
                <td>{{ $peminjaman->jumlah }}</td>
            </tr>
            <!-- Jika ada lebih banyak item, tambahkan baris data di sini -->
        </tbody>
    </table>
</body>

</html>