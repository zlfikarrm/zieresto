<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Jenis;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JenisImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Misalnya, lakukan validasi data sebelum disimpan
        // if ($this->isValidData($row)) {
        return new Jenis([
            'nama_jenis' => $row['nama_jenis'],
        ]);
        // }

        return null; // Jika data tidak valid, kembalikan null
    }

    public function headingRow(): int
    {
        return 3; // Nomor baris tempat judul kolom berada
    }

    // // Metode untuk melakukan validasi data
    // private function isValidData($row)
    // {
    //     // Misalnya, lakukan pemeriksaan apakah data yang diperlukan tidak kosong
    //     if (!empty($row['id']) && !empty($row['nama_jenis'])) {
    //         return true;
    //     }        

    //     return false;
    //}
}