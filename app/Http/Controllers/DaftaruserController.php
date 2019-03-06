<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Universitas;
use App\Member;
use App\Code;
class DaftaruserController extends Controller
{

    public function index()
    {
    	$data['provinsi'] 		= Provinsi::orderBy('nama','asc')->get();
    	$data['universitas']	= Universitas::where('status',1)->orderBy('nama','asc')->get();
    	return view('daftaruser.index',$data);
    }

    public function store(Request $request)
    {
        // echo $request->kode_pos_surat;
    	$this->validate($request, [
            'nama'                  => 'required|max:50',
            'noktp'                 => 'required|digits_between:0,50|numeric|unique:members,noktp',
            'jekel'                 => 'required',
            'tempat_lahir'          => 'required|max:50',
            'tgl_lahir'             => 'required|date_format:Y/m/d|before:'.date('Y/m/d'),
            'alamat'                => 'required',
            'kota_kabupaten'        => 'required|max:50',
            'provinsi_id'           => 'required',
            'kodearea'              => 'required|numeric|digits_between:0,5',
            'telp_rumah'            => 'required|numeric|digits_between:0,17',
            'handphone'             => 'required|numeric|digits_between:0,15',
            'email'                 => 'required|email|max:50',
            'anak_ke'               => 'required|numeric|digits_between:0,2',
            'jumlah_saudara'        => 'required|numeric|digits_between:0,2',
            'anak_berkeluarga'      => 'required|numeric|digits_between:0,2',
            'anggota_kk'            => 'required|numeric|digits_between:0,2',

            'universitas_id'        => 'required',
            'jurusan'               => 'required|max:50',
            'fakultas'              => 'required|max:50',
            'semester'              => 'required',
            'ipk'                   => 'required|max:4',
            'biaya_kuliah'          => 'required|numeric|digits_between:0,10',
            'target_lulus'          => 'required|max:30',

            'nama_ayah'             => 'required|max:50',
            'nama_ibu'              => 'required|max:50',
            'alamat_ortu'           => 'required',
            'kota_kabupaten_ortu'   => 'required|max:50',
            'provinsiortu_id'       => 'required',

            'catatan_lain'          => 'required',

            'persetujuan'           => 'required',

            'g-recaptcha-response'  => 'required|captcha'
        ],
        [
            'noktp.unique'  => 'No. KTP sudah pernah di daftarkan'
        ]);

        if ($request->tanya_alamat_surat == 2) {
            $this->validate($request, [
                'alamat_surat'          => 'required',
                'kota_kabupaten_surat'  => 'required|max:50',
                'kode_pos_surat'        => 'required|numeric|digits_between:0,10'
            ]);
        }

        if ($request->aktif_organisasi == 1) {
            $this->validate($request, [
                'nama_organisasi'   => 'required|max:50',
                'jabatan'           => 'required|max:50'
            ]);
        }

        if ($request->ayah_bekerja == 1) {
            $this->validate($request, [
                'pekerjaan_ayah'        => 'required|max:50',
                'gaji_ayah'             => 'required|numeric|digits_between:0,15'
            ]);
        }
        else{
            $this->validate($request, [
                'alasan_ayah'           => 'required'
            ]);
        }

        if ($request->ibu_bekerja == 1) {
            $this->validate($request, [
                'pekerjaan_ibu'        => 'required|max:50',
                'gaji_ibu'             => 'required|numeric|digits_between:0,15'
            ]);
        }
        else{
            $this->validate($request, [
                'alasan_ibu'           => 'required'
            ]);
        }

        if ($request->hasil_lain == 1) {
            $this->validate($request, [
                'pekerjaan_hasil_lain'        => 'required|max:50',
                'gaji_hasil_lain'             => 'required|numeric|digits_between:0,15'
            ]);
        }

        if ($request->tanya_beasiswa == 1) {
            $this->validate($request, [
                'beasiswa_diperoleh'            => 'required|max:50',
                'pemberi_beasiswa_diperoleh'    => 'required|max:50',
                'periode_beasiswa_diperoleh'    => 'required|max:50'
            ]);
        }

        $data = $request->except([
            '_token',
            'kodearea',
            'telp_rumah',
            'persetujuan',
            'g-recaptcha-response'
            
        ]);

        $notlp = $request->kodearea.$request->telp_rumah;
        $data['notlp'] = $notlp;

        $member = Member::create($data);

        $data2 = array(
            'kode'      => 'KD-'.$member->id,
            'member_id' => $member->id 
        );

        $code = Code::create($data2);

        return view('daftaruser.hasil',$code);

        // echo "<pre>";
        // var_dump($data);
        // echo "<pre>";
        
    }

    public function ajax_universitas(Request $request)
    {
        $id     = $request->id;
        $data['universitas']    = Universitas::where('status',$id)->get();
        // return response()->json($data);
        return view('ajax/universitas',$data);
        // return View::make('ajax.universitas')->render();
    }

}
