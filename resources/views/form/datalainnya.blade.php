<div class="well">
	<div class="row">
        <div class="col-lg-3"><u><h4>Data Lainnya</h4></u></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Pernah Mendapatkan Beasiswa Sebelumnya?</label>
        <div class="col-lg-2 radio-daftaruser">
            <input class="tanya_beasiswa_ya" type="radio" name="tanya_beasiswa" value="1" {{ old('tanya_beasiswa') ? '' : 'checked'}} {{ old('tanya_beasiswa') == 1 ? 'checked' : ''}}> Sudah
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input class="tanya_beasiswa_tidak" type="radio" name="tanya_beasiswa" value="2" {{ old('tanya_beasiswa') == 2 ? 'checked' : ''}}> Belum
        </div>
    </div>
    <div class="form-group {{ $errors->has('beasiswa_diperoleh') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nama / Jenis Beasiswa Yang Pernah Diperoleh</label>
        <div class="col-lg-9">
            <input type="text" name="beasiswa_diperoleh" placeholder="Masukkan beasiswa yang diperoleh" class="form-control iden_beasiswa" value="{{ old('beasiswa_diperoleh') }}">
            {!! $errors->first('beasiswa_diperoleh', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pemberi_beasiswa_diperoleh') ? ' has-error' : '' }}">
        <label class="col-lg-3">Pihak Pemberi Beasiswa</label>
        <div class="col-lg-9">
            <input type="text" name="pemberi_beasiswa_diperoleh" placeholder="Masukkan Pihak Pemberi Beasiswa" class="form-control iden_beasiswa" value="{{ old('pemberi_beasiswa_diperoleh') }}">
            {!! $errors->first('pemberi_beasiswa_diperoleh', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('periode_beasiswa_diperoleh') ? ' has-error' : '' }}">
        <label class="col-lg-3">Periode Beasiswa</label>
        <div class="col-lg-9">
            <input type="text" name="periode_beasiswa_diperoleh" placeholder="Masukkan Periode Beasiswa" class="form-control iden_beasiswa" value="{{ old('periode_beasiswa_diperoleh') }}">
            {!! $errors->first('periode_beasiswa_diperoleh', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('catatan_lain') ? ' has-error' : '' }}">
        <label class="col-lg-3">Catatan lain</label>
        <div class="col-lg-9">
            <textarea name="catatan_lain" class="form-control" placeholder="Masukkan catatan lain" rows="5">{{ old('catatan_lain') }}</textarea>
            {!! $errors->first('catatan_lain', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
</div>