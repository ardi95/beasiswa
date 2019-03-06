<div class="well">
    <!-- DATA PRIBADI -->
    <div class="row">
        <div class="col-lg-3"><u><h4>Data Pribadi</h4></u></div>
    </div>
    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nama Lengkap</label>
        <div class="col-lg-9">
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap sesuai KTP" value="{{ old('nama') }}">
            {!! $errors->first('nama', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('noktp') ? ' has-error' : '' }}">
        <label class="col-lg-3">No. KTP</label>
        <div class="col-lg-9">
            <input type="text" name="noktp" class="form-control" placeholder="Masukkan nomor KTP" value="{{ old('noktp') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('noktp', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Jenis Kelamin</label>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" name="jekel" value="1" {{ old('jekel') == 1 ? 'checked' : ''}}> Laki - laki
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" name="jekel" value="2" {{ old('jekel') == 2 ? 'checked' : ''}}> Perempuan
        </div>
        <div class="col-lg-5 radio-daftaruser">
            {!! $errors->first('jekel', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
        <label class="col-lg-3">Kota tempat lahir</label>
        <div class="col-lg-9">
            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Kota tempat lahir" value="{{ old('tempat_lahir') }}">
            {!! $errors->first('tempat_lahir', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
        <label class="col-lg-3">Tanggal Lahir</label>
        <div class="col-lg-9">
            <div class="input-group date" data-date-format="yyyy/mm/dd" >
                <input type="text" name="tgl_lahir" class="form-control tgl_lahir" placeholder="Masukkan tanggal lahir ex:1995/04/24" value="{{ old('tgl_lahir') }}"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
            {!! $errors->first('tgl_lahir', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
        <label class="col-lg-3">Alamat</label>
        <div class="col-lg-9">
            <textarea name="alamat" class="form-control" placeholder="Masukkan alamat sesuai KTP" rows="5">{{ old('alamat') }}</textarea>
            {!! $errors->first('alamat', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('kota_kabupaten') ? ' has-error' : '' }}">
        <label class="col-lg-3">Kota/Kabupaten</label>
        <div class="col-lg-9">
            <input type="text" name="kota_kabupaten" class="form-control" placeholder="Masukkan Kota/Kabupaten"  value="{{ old('kota_kabupaten') }}">
            {!! $errors->first('kota_kabupaten', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('provinsi_id') ? ' has-error' : '' }}">
        <label class="col-lg-3">Provinsi</label>
        <div class="col-lg-9">
            <select name="provinsi_id" class="form-control">
                <option value="">Pilih provinsi</option>
                @foreach($provinsi as $p)
                    <option value="{{ $p->id }}" {{ old('provinsi_id') == $p->id ? 'selected' : ''}}>{{ $p->nama }}</option>
                @endforeach
            </select>
            {!! $errors->first('provinsi_id', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Alamat surat menyurat sesuai KTP?</label>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" name="tanya_alamat_surat" value="1" class="surat-ya" {{ old('tanya_alamat_surat') ? '' : 'checked'}} {{ old('tanya_alamat_surat') == 1 ? 'checked' : ''}}> Ya
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" name="tanya_alamat_surat" value="2" class="surat-tidak" {{ old('tanya_alamat_surat') == 2 ? 'checked' : ''}}> Tidak
        </div>
        <div class="col-lg-5 radio-daftaruser">
            {!! $errors->first('tanya_alamat_surat', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('alamat_surat') ? ' has-error' : '' }}">
        <label class="col-lg-3">Alamat surat menyurat</label>
        <div class="col-lg-9">
            <textarea name="alamat_surat" class="form-control iden-surat" placeholder="Masukkan alamat sesuai KTP" rows="5" disabled="disabled">{{ old('alamat_surat') }}</textarea>
            {!! $errors->first('alamat_surat', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('kota_kabupaten_surat') ? ' has-error' : '' }}">
        <label class="col-lg-3">Kota/Kabupaten</label>
        <div class="col-lg-9">
            <input type="text" name="kota_kabupaten_surat" class="form-control iden-surat" placeholder="Masukkan Kota/Kabupaten" value="{{ old('kota_kabupaten_surat') }}" disabled="disabled">
            {!! $errors->first('kota_kabupaten_surat', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('kode_pos_surat') ? ' has-error' : '' }}">
        <label class="col-lg-3">Kode Pos</label>
        <div class="col-lg-3">
            <input type="text" name="kode_pos_surat" class="form-control iden-surat" placeholder="Kode pos" value="{{ old('kode_pos_surat') }}" disabled="disabled" onkeypress="return isNumberKey(event)">
            {!! $errors->first('kode_pos_surat', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Provinsi</label>
        <div class="col-lg-9">
            <select name="provinsisurat_id" class="form-control iden-surat" disabled="disabled">
                <option value="">Pilih provinsi</option>
                @foreach($provinsi as $p)
                    <option value="{{ $p->id }}" {{ old('provinsisurat_id') == $p->id ? 'selected' : ''}}>{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group {{ $errors->has('kodearea') || $errors->has('telp_rumah') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nomor Telpon Rumah</label>
        <div class="col-lg-3">
            <input type="text" name="kodearea" class="form-control" placeholder="Kode area" value="{{ old('kodearea') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('kodearea', '<p class="text-danger">:message</p>') !!}
        </div>
        <div class="col-lg-1">
            <p class="text-center">-</p>
        </div>
        <div class="col-lg-5">
            <input type="text" name="telp_rumah" class="form-control" value="{{ old('telp_rumah') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('telp_rumah', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('handphone') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nomor HP</label>
        <div class="col-lg-9">
            <input type="text" name="handphone" class="form-control" placeholder="Masukkan nomor handphone" value="{{ old('handphone') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('handphone', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-lg-3">Email</label>
        <div class="col-lg-9">
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" value="{{ old('email') }}">
            {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('anak_ke') || $errors->has('jumlah_saudara') ? ' has-error' : '' }}">
        <label class="col-lg-3">Anak ke</label>
        <div class="col-lg-2">
            <input type="text" name="anak_ke" class="form-control" value="{{ old('anak_ke') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('anak_ke', '<p class="text-danger">:message</p>') !!}
        </div>
        <label class="col-lg-1">dari</label>
        <div class="col-lg-2">
            <input type="text" name="jumlah_saudara" class="form-control" value="{{ old('jumlah_saudara') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('jumlah_saudara', '<p class="text-danger">:message</p>') !!}
        </div>
        <div class="col-lg-4">
            bersaudara kandung dan atau tiri  
        </div>
    </div>
    <div class="form-group {{ $errors->has('anak_berkeluarga') ? ' has-error' : '' }}">
        <label class="col-lg-3">Jumlah Saudara Kandung dan atau Tiri Yang Telah Berkeluarga(termasuk diri sendiri bila sudah berkeluarga)</label>
        <div class="col-lg-2">
            <input type="text" name="anak_berkeluarga" class="form-control" value="{{ old('anak_berkeluarga') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('anak_berkeluarga', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('anggota_kk') ? ' has-error' : '' }}">
        <label class="col-lg-3">Jumlah Anggota Keluarga Dalam 1 KK</label>
        <div class="col-lg-2">
            <input type="text" name="anggota_kk" class="form-control" value="{{ old('anggota_kk') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('anggota_kk', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
</div>