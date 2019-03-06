<div class="well">

    <!-- DATA PENDIDIKAN -->
    <div class="row">
        <div class="col-lg-3"><u><h4>Data Pendidikan</h4></u></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Status Perguruan Tinggi</label>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" class="class_univ" name="status_univ" value="1" {{ old('status_univ') ? '' : 'checked'}} {{ old('status_univ') == 1 ? 'checked' : ''}}> Negeri
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" class="class_univ class_univ_swasta" name="status_univ" value="2" {{ old('status_univ') == 2 ? 'checked' : ''}}> Swasta
        </div>
    </div>
    <div class="form-group {{ $errors->has('universitas_id') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nama Perguruan Tinggi</label>
        <div class="col-lg-9">
            <select name="universitas_id" class="form-control select-univ">
                <option value="">pilih universitas</option>
                @foreach($universitas as $u)
                    <option value="{{ $u->id }}" {{ old('universitas_id') == $u->id ? 'selected' : ''}}>{{ $u->nama }}</option>
                @endforeach
                <option value="lain">Lainnya</option>
            </select>
            {!! $errors->first('universitas_id', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('jurusan') ? ' has-error' : '' }}">
        <label class="col-lg-3">Jurusan</label>
        <div class="col-lg-9">
            <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan') }}">
            {!! $errors->first('jurusan', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('fakultas') ? ' has-error' : '' }}">
        <label class="col-lg-3">Fakultas</label>
        <div class="col-lg-9">
            <input type="text" name="fakultas" class="form-control" value="{{ old('fakultas') }}">
            {!! $errors->first('fakultas', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('semester') ? ' has-error' : '' }}">
        <label class="col-lg-3">Saat Ini Duduk Di Semester</label>
        <div class="col-lg-9">
            <select name="semester" class="form-control">
                <option value="">pilih semester</option>
                <option value="3" {{ old('semester') == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('semester') == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('semester') == 5 ? 'selected' : '' }}>5</option>
                <option value="6" {{ old('semester') == 6 ? 'selected' : '' }}>6</option>
                <option value="7" {{ old('semester') == 7 ? 'selected' : '' }}>7</option>
                <option value="8" {{ old('semester') == 8 ? 'selected' : '' }}>8</option>
            </select>
            {!! $errors->first('semester', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ipk') ? ' has-error' : '' }}">
        <label class="col-lg-3">IPK</label>
        <div class="col-lg-3">
            <input type="text" name="ipk" class="form-control" placeholder="Contoh: 3.94 " value="{{ old('ipk') }}" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);">
            {!! $errors->first('ipk', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3">Aktif Organisasi</label>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" name="aktif_organisasi" value="1" class="org-ya" {{ old('aktif_organisasi') ? '' : 'checked'}} {{ old('aktif_organisasi') == 1 ? 'checked' : ''}}> Ya
        </div>
        <div class="col-lg-2 radio-daftaruser">
            <input type="radio" name="aktif_organisasi" value="2" class="org-tidak" {{ old('aktif_organisasi') == 2 ? 'checked' : ''}}> Tidak
        </div>
    </div>
    <div class="form-group {{ $errors->has('nama_organisasi') ? ' has-error' : '' }}">
        <label class="col-lg-3">Nama Organisasi</label>
        <div class="col-lg-9">
            <input type="text" name="nama_organisasi" class="form-control iden-org" placeholder="Masukkan nama organisasi" value="{{ old('nama_organisasi') }}">
            {!! $errors->first('nama_organisasi', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('jabatan') ? ' has-error' : '' }}">
        <label class="col-lg-3">Jabatan</label>
        <div class="col-lg-9">
            <input type="text" name="jabatan" placeholder="Masukkan jabatan" class="form-control iden-org" value="{{ old('jabatan') }}">
            {!! $errors->first('jabatan', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('biaya_kuliah') ? ' has-error' : '' }}">
        <label class="col-lg-3">Biaya kuliah per semester</label>
        <div class="col-lg-9">
            Rp. &nbsp; <input type="text" name="biaya_kuliah" placeholder="Masukkan nominal biaya kuliah" class="form-control biaya-kuliah" value="{{ old('biaya_kuliah') }}" onkeypress="return isNumberKey(event)">
            {!! $errors->first('biaya_kuliah', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('target_lulus') ? ' has-error' : '' }}">
        <label class="col-lg-3">Target Lulus (Bulan & Tahun)</label>
        <div class="col-lg-9">
            <input type="text" name="target_lulus" placeholder="Contoh: Oktober 2019" class="form-control" value="{{ old('target_lulus') }}">
            {!! $errors->first('target_lulus', '<p class="text-danger">:message</p>') !!}
        </div>
    </div>
</div>