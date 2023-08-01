<?php

namespace App\Imports;

use App\Models\PayrolModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class PayrolImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PayrolModel([
            //
            'nik'     => $row[2],
            'nama_karyawan'    => $row[1],
            'hari_kerja'     => $row[3],
            'penempatan'     => $row[6],
            'upah_dasar'     => $row[9],
            'tunjangan_jabatan'     => $row[10],
            'kompensasi'     => $row[11],
            'lembur'     => $row[12],
            'bpjs_tk'     => $row[13],
            'bpjs_kes'     => $row[14],
            'kekurangan'     => $row[15],
            'jumlah_pendapatan'     => $row[16],
            'jam_terbuang'     => $row[17],
            'pot_absesnsi'     => $row[18],
            'pot_kasir'     => $row[19],
            'pot_kelebihan'     => $row[20],
            'pot_hari_kerja' => $row[4],
            'potongan_hari_kerja'     => $row[21],
            'cuti_izin' => $row[5],
            'pot_cuti_izin'     => $row[22],
            'pot_bpjs_kes'     => $row[23],
            'pot_bpjs_tk'     => $row[24],
            'jumlah_potongan'     => $row[25],
            'penerimaan'     => $row[26],
            'pembulatan'     => $row[27],
            'diterimakan'     => $row[28],
            'gaji_bulan'      => $row[33],
            'link_token'        => Str::random(60),
        ]);
    }
}
