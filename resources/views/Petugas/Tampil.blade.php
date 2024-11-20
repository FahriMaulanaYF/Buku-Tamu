@include('template.header')

@include('template.sidebar')

<div class="main-content">
    <nav class="navbar">
        <div id="menu-button">
            <input type="checkbox" id="menu-checkbox">
            <label for="menu-checkbox" id="menu-label">
                <div id="hamburger"></div>
            </label>
        </div>
        <div class="typing">
            <h2 data-text="Dinas Perhubungan Kota Bandung">Dinas Perhubungan Kota Bandung</h2>
        </div>
    </nav>
    <h3 style="margin-left: 60px;  ">Daftar Petugas</h3>

    

     <div class="card-daftar-petugas">
        <form action="{{ route('petugas.search') }}" method="GET">
            <div class="search" style=" background-color: rgb(242, 244, 247); margin-top:20px">
                <i class="fa fa-search"></i>
                <input type="search" class="input-search form-control"  placeholder="search of username" id="search"   name="search" autocomplete="off">
                <div>
                <button  class="btn-search">Search</button>
                 </div>
            </div>
        </form>
        <table class="table-petugas">
            <thead style="font-size: 15px">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Masuk</th>
     `              <th>Level</th>
                    <th>Aksi</th>
            </thead>
            @foreach ($petugas as $no => $data)
                <tbody class="table-group-divider">
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $data->username}}</td>
                        <td>{{ $data->created_at}}</td>       
                        <td>{{$data->level  }}</td>            
                      
                     
                        <td>
                            <a href="{{ route('petugas.edit', $data->id) }}" style=""><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(36, 230, 10, 1);transform: ;msFilter:;">
                                    <path
                                        d="M8.707 19.707 18 10.414 13.586 6l-9.293 9.293a1.003 1.003 0 0 0-.263.464L3 21l5.242-1.03c.176-.044.337-.135.465-.263zM21 7.414a2 2 0 0 0 0-2.828L19.414 3a2 2 0 0 0-2.828 0L15 4.586 19.414 9 21 7.414z">
                                    </path>
                                </svg></a>
                            <form action="{{ route('petugas.delete', $data->id) }}" method="post">
                                @csrf
                                <button style="border: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: rgba(230, 10, 10, 1);transform: ;msFilter:;">
                                        <path
                                            d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm10.618-3L15 2H9L7.382 4H3v2h18V4z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="pagination" style=>
            {!! $petugas->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
      
    </div> 
 


    @if (Session::get('hapus'))
        <script>
            Swal.fire("berhasil menghapus data");
        </script>
    @endif
</div>


@include('template.footer')