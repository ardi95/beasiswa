<!-- DATA KEUANGAN -->
<div class="well">
    <div class="row">
        <div class="col-lg-3"><u><h4>Data Keuangan</h4></u></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Apakah ayah bekerja?</label>
        <div class="col-lg-2 radio-daftaruser">
            <input class="ayah_kerja_ya" type="radio" name="ayah_bekerja" value="1" {{ old('ayah_bekerja') ? '' : 'checked'}} {{ old('ayah_bekerja') == 1 ? 'checked' : ''}}> Ya
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input class="ayah_kerja_tidak" type="radio" name="ayah_bekerja" value="2" {{ old('ayah_bekerja') == 2 ? 'checked' : ''}}> Tidak
        </div>
    </div>
    <div class="form-group {{ $errors->has('alasan_ayah') ? ' has-error' : '' }}">
        <label class="col-lg-3">Alasan ayah tidak bekerja</label>
        <div class="col-lg-9">
            <textarea disabled="disabled" name="alasan_ayah" class="form-control disabled-ayah-kerja" placeholder="Masukkan alasan ayah tidak bekerja" rows="5">{{ old('alasan_ayah') }}</textarea>
            {!! $errors->first('alasan_ayah', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pekerjaan_ayah') ? ' has-error' : '' }}">
        <label class="col-lg-3">Pekerjaaan ayah</label>
        <div class="col-lg-9">
            <input type="text" name="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah" class="form-control enabled-ayah-kerja" value="{{ old('pekerjaan_ayah') }}">
            {!! $errors->first('pekerjaan_ayah', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('gaji_ayah') ? ' has-error' : '' }}">
        <label class="col-lg-3">Penghasilan ayah per bulan</label>
        <div class="col-lg-9">
            Rp. &nbsp; <input type="text" name="gaji_ayah" placeholder="Masukkan nominal gaji ayah" class="form-control biaya-kuliah enabled-ayah-kerja" value="{{ old('gaji_ayah') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('gaji_ayah', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Apakah ibu bekerja?</label>
        <div class="col-lg-2 radio-daftaruser">
            <input class="ibu_kerja_ya" type="radio" name="ibu_bekerja" value="1" checked="checked" {{ old('ibu_bekerja') ? '' : 'checked'}} {{ old('ibu_bekerja') == 1 ? 'checked' : ''}}> Ya
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input class="ibu_kerja_tidak" type="radio" name="ibu_bekerja" value="2" {{ old('ibu_bekerja') == 2 ? 'checked' : ''}}> Tidak
        </div>
    </div>
    <div class="form-group {{ $errors->has('alasan_ibu') ? ' has-error' : '' }}">
        <label class="col-lg-3">Alasan ibu tidak bekerja</label>
        <div class="col-lg-9">
            <textarea disabled="disabled" name="alasan_ibu" class="form-control disabled-ibu-kerja" placeholder="Masukkan alasan ibu tidak bekerja" rows="5">{{ old('alasan_ibu') }}</textarea>
            {!! $errors->first('alasan_ibu', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pekerjaan_ibu') ? ' has-error' : '' }}">
        <label class="col-lg-3">Pekerjaaan ibu</label>
        <div class="col-lg-9">
            <input type="text" name="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu" class="form-control enabled-ibu-kerja" value="{{ old('pekerjaan_ibu') }}">
            {!! $errors->first('pekerjaan_ibu', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('gaji_ibu') ? ' has-error' : '' }}">
        <label class="col-lg-3">Penghasilan ibu per bulan</label>
        <div class="col-lg-9">
            Rp. &nbsp; <input type="text" name="gaji_ibu" placeholder="Masukkan nominal gaji ibu" class="form-control biaya-kuliah enabled-ibu-kerja" value="{{ old('gaji_ibu') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('gaji_ibu', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('hasil_lain') ? ' has-error' : '' }}">
        <label class="col-lg-3">Penghasilan Lain</label>
        <div class="col-lg-2 radio-daftaruser">
            <input class="hasil_lain_ya" type="radio" name="hasil_lain" value="1" {{ old('hasil_lain') ? '' : 'checked'}} {{ old('hasil_lain') == 1 ? 'checked' : ''}}> Ya
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input class="hasil_lain_tidak" type="radio" name="hasil_lain" value="2" {{ old('hasil_lain') == 2 ? 'checked' : ''}}> Tidak
        </div>
    </div>
    <div class="form-group {{ $errors->has('pekerjaan_hasil_lain') ? ' has-error' : '' }}">
        <label class="col-lg-3">Pekerjaaan lain</label>
        <div class="col-lg-9">
            <input type="text" name="pekerjaan_hasil_lain" placeholder="Masukkan pekerjaan penghasilan lain" class="form-control iden_hasil_lain" value="{{ old('pekerjaan_hasil_lain') }}">
            {!! $errors->first('pekerjaan_hasil_lain', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('gaji_hasil_lain') ? ' has-error' : '' }}">
        <label class="col-lg-3">Penghasilan Lain per bulan</label>
        <div class="col-lg-9">
            Rp. &nbsp; <input type="text" name="gaji_hasil_lain" placeholder="Masukkan nominal pemasukan lain" class="form-control biaya-kuliah iden_hasil_lain" value="{{ old('gaji_hasil_lain') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('gaji_hasil_lain', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
</div>