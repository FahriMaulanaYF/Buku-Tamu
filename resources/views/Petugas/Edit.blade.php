@include('template.header')

@include('template.sidebar')

<div class="main-content">
    @include('template.navbar')
    <h3 style="margin-left: 350px; margin-top: 35px;  ">Tambah Data Petugas</h3>


    <div class="card" style="width: 450px; height: 450px; margin-left: 350px">

        <form action="{{ route('petugas.update', $petugas->id) }}" method="post">
            @csrf
            {{-- username --}}
            <div style="margin-top: 10px; margin-left:30px; ">
                <div>
                    <b><label style="font-size: 13px; margin-bottom: 8px">Nama Lengkap</label></b>
                </div>
                <div>
                    <input type="text" name="username" autocomplete="off" class="form-control"
                        value="{{ $petugas->username }}" style="width: 400px; height: 40px">
                </div>
            </div>

            {{-- Password --}}
            <div style="margin-top: 5px; margin-left:30px; ">
                <div>
                    <b><label style="font-size: 13px; margin-bottom: 8px">Password</label></b>
                </div>
                <div>
                    <input type="password" name="password"  value="{{ $petugas->password }} class="form-control" style="width: 400px; height: 40px">
                </div>
            </div>

            {{-- Tanggal  --}}
            <div style="margin-top: 10px; margin-left:30px; ">
                <div>
                    <b><label style="font-size: 13px; margin-bottom: 8px">Tanggal</label></b>
                </div>
                <div>
                    <input type="datetime-local" name="created_at"
                        class="form-control"style="width: 400px; height: 40px">
                </div>
            </div>

            {{-- level --}}
            <select class="form-select form-select-sm" aria-label="Small select example"
                style="margin-top: 35px; margin-left:30px; width: 400px; height: 40px">
                <option selected>Pilih Level Anda</option>
                <option value="1">Admin</option>
                <option value="2">Petugas</option>
            </select>

            <button
                style="background-color: #0e223e; border: none; color: #EEEEEE;  width: 150px;  
                height: 40px;  border-radius: 9px;  margin-top: 50px;  margin-left: 280px;">SIMPAN DATA
              </button>
        </form>
    </div>




    @include('template.footer')
