<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('noktp',50);
            $table->enum('jekel', ['1', '2']);
            $table->string('tempat_lahir',50);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('kota_kabupaten',50);
            $table->integer('provinsi_id');
            $table->enum('tanya_alamat_surat', ['1', '2']);
            $table->text('alamat_surat')->nullable();
            $table->string('kota_kabupaten_surat',50)->nullable();
            $table->string('kode_pos_surat',10)->nullable();
            $table->integer('provinsisurat_id')->nullable();
            $table->string('notlp',30);
            $table->string('handphone',30);
            $table->string('email',50);
            $table->string('anak_ke',2);
            $table->string('jumlah_saudara',2);
            $table->string('anak_berkeluarga',2);
            $table->string('anggota_kk',2);

            $table->enum('status_univ', ['1', '2']);
            $table->integer('universitas_id');
            $table->string('jurusan',50);
            $table->string('fakultas',50);
            $table->string('semester',50);
            $table->string('ipk',5);
            $table->enum('aktif_organisasi', ['1', '2']);
            $table->string('nama_organisasi',100)->nullable();
            $table->string('jabatan',50)->nullable();
            $table->string('biaya_kuliah',10);
            $table->string('target_lulus',30);

            $table->string('nama_ayah',50);
            $table->string('nama_ibu',50);
            $table->text('alamat_ortu');
            $table->string('kota_kabupaten_ortu',50);
            $table->integer('provinsiortu_id');

            $table->enum('ayah_bekerja', ['1', '2']);
            $table->text('alasan_ayah')->nullable();
            $table->string('pekerjaan_ayah',50)->nullable();
            $table->string('gaji_ayah',15)->nullable();
            $table->enum('ibu_bekerja', ['1', '2']);
            $table->text('alasan_ibu')->nullable();
            $table->string('pekerjaan_ibu',50)->nullable();
            $table->string('gaji_ibu',15)->nullable();
            $table->enum('hasil_lain', ['1', '2']);
            $table->string('pekerjaan_hasil_lain',50)->nullable();
            $table->string('gaji_hasil_lain',15)->nullable();

            $table->enum('tanya_beasiswa', ['1', '2']);
            $table->string('beasiswa_diperoleh',50)->nullable();
            $table->string('pemberi_beasiswa_diperoleh',50)->nullable();
            $table->string('periode_beasiswa_diperoleh',50)->nullable();
            $table->text('catatan_lain');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
