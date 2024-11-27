@include('template.header')

@include('template.sidebar')

<div class="main-content">
    @include('template.navbar')
    <h3 style="margin-left: 60px;  ">Tambah Data Tamu</h3>


    <div class="card-tambah-tamu">
        <form action="{{ route('tamu.update', $tamu->id) }}" method="post">
            @csrf
            <div class="row g-0">
                <div class=" col-md-7">


                    <div class="row g-3 align-items-center"
                        style="margin-top: 5px; margin-left:8px; margin-bottom:20px">
                        <div class="col-auto">
                            <b><label style="font-size: 14px">NAMA LENGKAP</label></b>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="nama" value="{{ $tamu->nama }}" class="form-control" autocomplete="off"  style="width: 450px;">
                        </div>
                    </div>


                    <div class="row g-3 align-items-center" style="margin-left:8px; margin-bottom:20px;">
                        <div class="col-auto">
                            <b><label style="font-size: 14px">JENIS KELAMIN</label></b>
                        </div>
                        <div class="col-auto form-check form-check-inline" style="margin-left: 20px">
                            <input class="form-check-input" id="lk" type="radio" name="jenkel" value="laki-laki">
                            <label class="form-check-label" for="lk">Laki - Laki</label>
                        </div>
                        <div class="col-auto form-check  form-check-inline">
                            <input class="form-check-input" id="cw" type="radio" name="jenkel" value="Perempuan">
                            <label class="form-check-label" for="cw">Perempuan</label>
                        </div>
                    </div>


                    <div class="row g-3 align-items-center" style="margin-left:8px; margin-bottom:20px;">
                        <div class="col-auto">
                            <b><label style="font-size: 14px">HP/WHATSAPP</label></b>
                        </div>
                        <div class="col-auto" style="margin-left: 10px">
                            <input type="text" name="no_hp" value="{{ $tamu->no_hp }}" class="form-control" autocomplete="off"  style="width: 450px">
                        </div>
                    </div>
                    <hr style="width: 580px; margin-left: 20px">


                    <div class="row mb-3" style="margin-top: 5px; margin-left:8px; margin-bottom:20px">
                        <div class="col-form-label col-sm-2 pt-0" style="font-size: 14px"><b>JENIS TAMU</b></div>
                        <div class="col-sm-10">
                            <div class="form-check" style="margin-left: 20px;">
                                <input class="form-check-input" type="radio" id="jt1" name="jenistamu" id="jenistamu"
                                    value="Perorangan / Masyarakat Umum" >
                                <label class="form-check-label" for="jt1">
                                    Perorangan / Masyarakat Umum
                                </label>
                            </div>
                            <div class="form-check" style="margin-left: 20px; margin-top: 15px">
                                <input class="form-check-input" type="radio" id="jt2" name="jenistamu" id="jenistamu"
                                    value=" Lembaga / Instansi">
                                <label class="form-check-label" for="jt2">
                                    Lembaga / Instansi
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="row g-3 align-items-center"
                        style="margin-top: 5px; margin-left:8px; margin-bottom:20px">
                        <div class="col-auto">
                            <b><label style="font-size: 14px">KEPERLUAN <br> TERKAIT <br> ANDA <br> BERTAMU</label></b>
                        </div>
                        <div class="col-auto" style="margin-left: 20px">
                            <textarea class="form-control" name="tujuan" rows="3" autocomplete="off" style="width: 460px; height: 150px"></textarea>
                        </div>
                    </div>                 
                 </div>



                <div class="col-md-5" style="margin-top: 25px">
                    <div style="font-size: 14px"><b>KEPERLUAN BERTAMU</b></div>
                    <hr style="margin-top: 3px; width: 420px ">
                    <div>
                        <div class="form-check" >
                            <input class="form-check-input"  type="radio" name="keperluan" id="kadis"
                                value=" Bertemu PLT Kepala Dinas" >
                            <label class="form-check-label" for="kadis" style="font-size: 12px; font-">
                                1. Bertemu PLT Kepala Dinas
                            </label>
                        </div>
                        <span style="margin-left: 40px; font-size: 11px;">haha</span>
                        <hr style="margin-top: 5px; width: 380px">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keperluan" id="sekdis"
                                value="Bertemu Sekretaris Dinas" >
                            <label class="form-check-label" for="sekdis" style="font-size: 12px; font-">
                                2. Bertemu Sekretaris Dinas
                            </label>
                        </div>
                        <span style="margin-left: 40px; font-size: 11px;">haha</span>
                        <hr style="margin-top: 5px; width: 380px">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keperluan" id="kabid"
                                value="Bertemu Kabid Dinas" >
                            <label class="form-check-label" for="kabid" style="font-size: 12px; font-">
                                3. Bertemu Kabid Dinas
                            </label>
                        </div>
                        <span style="margin-left: 40px; font-size: 11px;">haha</span>
                        <hr style="margin-top: 5px; width: 380px">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keperluan" id="p"
                                value="Bertemu Pegawai Dinas" >
                            <label class="form-check-label" for="p" style="font-size: 12px; font-">
                                4. Bertemu Pegawai Dinas
                            </label>
                        </div>
                        <span style="margin-left: 40px; font-size: 11px;">haha</span>
                        <hr style="margin-top: 5px; width: 380px">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keperluan" id="ll"
                                value="Lainnya" >
                            <label class="form-check-label" for="ll" style="font-size: 12px; font-">
                                5. Lainnya
                            </label>
                        </div>
                        <span style="margin-left: 40px; font-size: 11px;">haha</span>
                        <hr style="margin-top: 5px; width: 380px">
                        <button
                        style="background-color: #0e223e; border: none; color: #EEEEEE;  width: 150px;  height: 40px;  border-radius: 9px; margin-left: 290px;x">SIMPAN
                        DATA</button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
</div>


@include('template.footer')
