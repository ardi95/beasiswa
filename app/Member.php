<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = [
        'nama',
        'noktp',
        'jekel',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'kota_kabupaten',
        'provinsi_id',
        'tanya_alamat_surat',
        'alamat_surat',
        'kota_kabupaten_surat',
        'kode_pos_surat',
        'provinsisurat_id',
        'notlp',
        'handphone',
        'email',
        'anak_ke',
        'jumlah_saudara',
        'anak_berkeluarga',
        'anggota_kk',
        'status_univ',
        'universitas_id',
        'jurusan',
        'fakultas',
        'semester',
        'ipk',
        'aktif_organisasi',
        'nama_organisasi',
        'jabatan',
        'biaya_kuliah',
        'target_lulus',
        'nama_ayah',
        'nama_ibu',
        'alamat_ortu',
        'kota_kabupaten_ortu',
        'provinsiortu_id',
        'ayah_bekerja',
        'alasan_ayah',
        'pekerjaan_ayah',
        'gaji_ayah',
        'ibu_bekerja',
        'alasan_ibu',
        'pekerjaan_ibu',
        'gaji_ibu',
        'hasil_lain',
        'pekerjaan_hasil_lain',
        'gaji_hasil_lain',
        'tanya_beasiswa',
        'beasiswa_diperoleh',
        'pemberi_beasiswa_diperoleh',
        'periode_beasiswa_diperoleh',
        'catatan_lain'
    ];
}
