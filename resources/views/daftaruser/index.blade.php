@extends('layouts.app')

@section('content')
<div class="container container-daftaruser">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center text-primary">FORM PENDAFTARAN ONLINE BEASISWA SARJANA "BCA FINANCE PEDULI"</h3>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            {!! Form::open(['url' => 'daftaruser','class' => 'form-horizontal form-daftaruser']) !!}
            
                @include('form.datapribadi')

                @include('form.datapendidikan')

                @include('form.dataorangtua')

                @include('form.datakeuangan')

                @include('form.datalainnya')

                <p>Dengan ini saya menyatakan bahwa saya tidak sedang menerima beasiswa dari instansi/perusahaan manapun pada saat pengajuan beasiswa ini. Apabila saya tidak benar dalam mengisi formulir ini, saya bersedia dikenakan sanksi yang ditetapkan oleh pihak BCA Finance.</p>
                <p>Setuju &nbsp;<input type="checkbox" name="persetujuan" {{ old('persetujuan') ? 'checked' : ''}}></p>
                {!! $errors->first('persetujuan', '<p class="text-danger">:message</p>') !!}
                
                <div class="row row_captcha_daftaruser">
                    <div class="col-lg-6 col-lg-offset-3">
                        {!! app('captcha')->display() !!}
                        {!! $errors->first('g-recaptcha-response', '<p class="text-danger">:message</p>') !!}
                    </div>
                </div>
                
                
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>

            <!-- END FORM -->
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.input-group.date').datepicker({
                // format: 'yyyy/mm/dd',
                endDate: '-1d',
                maxDate: '-1',
                autoclose: true
            });

            // SURAT
            $('.surat-ya').click(function() {
                $('.iden-surat').attr('disabled','disabled');
            });

            $('.surat-tidak').click(function() {
                $('.iden-surat').removeAttr('disabled','disabled');
            });

            // ORGANISASI
            $('.org-tidak').click(function() {
                $('.iden-org').attr('disabled','disabled');
            });

            $('.org-ya').click(function() {
                $('.iden-org').removeAttr('disabled','disabled');
            });

            // AYAH KERJA
            $('.ayah_kerja_ya').click(function() {
                $('.disabled-ayah-kerja').attr('disabled','disabled');
                $('.enabled-ayah-kerja').removeAttr('disabled','disabled');
            });

            $('.ayah_kerja_tidak').click(function() {
                $('.disabled-ayah-kerja').removeAttr('disabled','disabled');
                $('.enabled-ayah-kerja').attr('disabled','disabled');
            });

            // IBU KERJA
            $('.ibu_kerja_ya').click(function() {
                $('.disabled-ibu-kerja').attr('disabled','disabled');
                $('.enabled-ibu-kerja').removeAttr('disabled','disabled');
            });

            $('.ibu_kerja_tidak').click(function() {
                $('.disabled-ibu-kerja').removeAttr('disabled','disabled');
                $('.enabled-ibu-kerja').attr('disabled','disabled');
            });

            // HASIL LAIN
            $('.hasil_lain_ya').click(function() {
                $('.iden_hasil_lain').removeAttr('disabled','disabled');
            });

            $('.hasil_lain_tidak').click(function() {
                $('.iden_hasil_lain').attr('disabled','disabled');
            });

            // DATA LAINNYA
            $('.tanya_beasiswa_ya').click(function() {
                $('.iden_beasiswa').removeAttr('disabled','disabled');
            });

            $('.tanya_beasiswa_tidak').click(function() {
                $('.iden_beasiswa').attr('disabled','disabled');
            });

            coba = $('.class_univ_swasta:checked').length;
            if (coba == 1) {
                iduniv = $('.class_univ_swasta').attr("value");
                tok = $( 'input[name=_token]' ).attr("value");

                $.ajax({
                    type        : 'post',
                    url         : "{{ url('/ajax_universitas') }}",
                    data    : {
                        id      : iduniv,
                        _token  : tok
                    },
                    'success'   : function(data) {
                        // console.log(data.id);
                        $(".select-univ").empty();
                        $(".select-univ").append(data);
                        $(".select-univ option[value={{ old('universitas_id') }}]").attr('selected','selected');
                    }
                });
            }

            $('.class_univ').click(function() {
                iduniv = $(this).attr("value");
                tok = $( 'input[name=_token]' ).attr("value");

                $.ajax({
                    type        : 'post',
                    url         : "{{ url('/ajax_universitas') }}",
                    data    : {
                        id      : iduniv,
                        _token  : tok
                    },
                    'success'   : function(data) {
                        // console.log(data.id);
                        $(".select-univ").empty();
                        $(".select-univ").append(data);
                    }
                });
            });

            surat = $('.surat-tidak:checked').length;
            if (surat == 1) {
                $('.iden-surat').removeAttr('disabled');
            }

            org = $('.org-tidak:checked').length;
            if (org == 1) {
                $('.iden-org').attr('disabled','disabled');
            }

            ayah_kerja = $('.ayah_kerja_tidak:checked').length;
            if (ayah_kerja == 1) {
                $('.enabled-ayah-kerja').attr('disabled','disabled');
                $('.disabled-ayah-kerja').removeAttr('disabled','disabled');
            }

            ibu_kerja = $('.ibu_kerja_tidak:checked').length;
            if (ibu_kerja == 1) {
                $('.enabled-ibu-kerja').attr('disabled','disabled');
                $('.disabled-ibu-kerja').removeAttr('disabled','disabled');
            }

            hasil_lain = $('.hasil_lain_tidak:checked').length;
            if (hasil_lain == 1) {
                $('.iden_hasil_lain').attr('disabled','disabled');
            }

            beasiswa = $('.tanya_beasiswa_tidak:checked').length;
            if (beasiswa == 1) {
                $('.iden_beasiswa').attr('disabled','disabled');
            }

        });
        
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)){
                return false;
            }

            return true;
        }

        function fun_AllowOnlyAmountAndDot(txt)
        {
            if(event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
            {
                var txtbx=document.getElementById(txt);
                var amount = document.getElementById(txt).value;
                var present=0;
                var count=0;

            if(amount.indexOf(".",present)||amount.indexOf(".",present+1));
            {
                // alert('0');
            }
            do
            {
                present=amount.indexOf(".",present);
                if(present!=-1)
                {
                    count++;
                    present++;
                }
            }
            while(present!=-1);
            if(present==-1 && amount.length==0 && event.keyCode == 46)
            {
                event.keyCode=0;
                //alert("Wrong position of decimal point not  allowed !!");
                return false;
            }

            if(count>=1 && event.keyCode == 46)
            {

                event.keyCode=0;
                return false;
            }
            if(count==1)
            {
                var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                if(lastdigits.length>=2)
                {
                    event.keyCode=0;
                    return false;
                }
            }
            return true;
            }
            else
            {
                event.keyCode=0;
                return false;
            }

        }
    </script>
@endpush