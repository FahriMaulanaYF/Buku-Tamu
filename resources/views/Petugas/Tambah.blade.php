@include('template.header')

@include('template.sidebar')

<div class="main-content">
    @include('template.navbar')
    <h3 style="margin-left: 410px; margin-top: 35px;  ">Tambah Data Petugas</h3>


    <div class="card-tambah-petugas">
     <form action="{{ route('petugas.sumbit') }}" method="post">
            @csrf


            <div class="petugas-nama">
                <label>Nama Lengkap</label>
                <input type="text" name="username" autocomplete="off" class="form-control">
            </div>


            <div class="petugas-password">
                 <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>


            <div class="petugas-tanggal">
                <label>Tanggal</label>
               <input type="datetime-local" name="created_at" class="form-control">             
            </div>


            <select name="level" class="form-select form-select-sm" aria-label="Small select example">
                <option name="level" value="null" selected>Pilih Level Anda</option>
                <option name="level" value="Admin">Admin</option>
                <option name="level" value="Petugas">Petugas</option>
            </select>

            <div class="button-tambah-petugas">
                <button>SIMPAN  DATA</button>
            </div>
        </form> 
    </div>









@include('template.footer')
