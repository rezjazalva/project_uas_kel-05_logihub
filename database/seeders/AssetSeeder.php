<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Mengambil daftar file gambar yang ingin di-upload (misalnya dari folder 'gambar_produk')
        $csv = Reader::createFromPath(database_path('data_aset.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            // Simpan data item ke dalam database
            DB::table('assets')->insert([
                'nama_item' => $record['nama_item'],
                'image_path' => $record['image_path'], // Path relatif gambar di CSV (contoh: 'assets/img/portfolio/nama_gambar.png')
                'jenis_item' => $record['jenis_item'],
                'kode_item' => $record['kode_item'],
                'stok_item' => $record['stok_item'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
