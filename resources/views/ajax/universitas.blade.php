<option value="">pilih universitas</option>
@foreach($universitas as $u)
    <option value="{{ $u->id }}">{{ $u->nama }}</option>
@endforeach
<option value="lain">Lainnya</option>