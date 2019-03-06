<div class="well">

    <!-- DATA ORANG TUA -->
    <div class="row">
        <div class="col-lg-3"><u><h4>Data Orang Tua</h4></u></div>
    </div>
    <div class="form-group {{ $errors->has('nama_ayah') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nama Ayah</label>
        <div class="col-lg-9">
            <input type="text" name="nama_ayah" placeholder="Masukkan nama ayah" class="form-control" value="{{ old('nama_ayah') }}">
            {!! $errors->first('nama_ayah', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('nama_ibu') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nama Ibu</label>
        <div class="col-lg-9">
            <input type="text" name="nama_ibu" placeholder="Masukkan nama ibu" class="form-control" value="{{ old('nama_ibu') }}">
            {!! $errors->first('nama_ibu', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('alamat_ortu') ? ' has-error' : '' }}">
        <label class="col-lg-3">Alamat Orang Tua</label>
        <div class="col-lg-9">
            <textarea name="alamat_ortu" class="form-control" placeholder="Masukkan alamat orang tua" rows="5">{{ old('alamat_ortu') }}</textarea>
            {!! $errors->first('alamat_ortu', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('kota_kabupaten_ortu') ? ' has-error' : '' }}">
        <label class="col-lg-3">Kota/Kabupaten</label>
        <div class="col-lg-9">
            <input type="text" name="kota_kabupaten_ortu" placeholder="Masukkan Kota/Kabupaten orang tua" class="form-control" value="{{ old('kota_kabupaten_ortu') }}">
            {!! $errors->first('kota_kabupaten_ortu', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('provinsiortu_id') ? ' has-error' : '' }}">
        <label class="col-lg-3">Provinsi</label>
        <div class="col-lg-9">
            <select name="provinsiortu_id" class="form-control">
                <option value="">Pilih provinsi</option>
                @foreach($provinsi as $p)
                    <option value="{{ $p->id }}" {{ old('provinsiortu_id') == $p->id ? 'selected' : ''}}>{{ $p->nama }}</option>
                @endforeach
            </select>
            {!! $errors->first('provinsiortu_id', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
</div>