@extends('layouts.app')

@section('content')
	<div class="container container-daftaruser">
		<div class="row">
			<div class="col-lg-12">
				<h4>
					Pendaftaran selesai dan data telah tersimpan. Nomor pendaftaran Anda adalah <b>{{ $kode }}</b>
				</h4>
				<h4>
					Mohon catat dan simpan nomor pendaftaran Anda untuk pengumuman berikutnya. Terima Kasih"
				</h4>
			</div>
		</div>
	</div>
@endsection