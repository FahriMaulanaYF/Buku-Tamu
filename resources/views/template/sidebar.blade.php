   <!-- sidebar  -->
   <div class="sidebar">
     <div class="sidebar-header">
       <img class="mt-5" src="{{ asset('images/Icon Dishub.png') }}" alt="" style="width: 100px; margin-left: 50px">
       <hr>
       <p>HOME</p>
     </div>
     <div class="sidebar-content">
       <div class="list-item">
         {{-- <a href="{{ route('/menu') }}"> --}}
           <li style="margin-top: 5px; margin-bottom: 40px ">
             <i class="fi fi-rs-people-roof"></i>
             <span style="margin-left: 10px; ">Dashboard</span>
           </li>
         </a>
       </div>
       <hr>
       <p class="mt-4">MENU</p>
         <div class="list-menu">
           <div class="list-item"><a href="{{ route('tamu.tampil') }}">
               <li><i class="fi fi-rs-users-alt"></i><span style="margin-left: 10px;"> Daftar Tamu</span>
               <li>
             </a></div>
           <div class="list-item"><a href="{{ route('tamu.tambah') }}">
               <li><i class="fi fi-rs-user-add"></i><span style="margin-left: 10px;"> Input Data</span>
               <li>
             </a></div>
           <div class="list-item"><a href="{{ route('petugas.tampil') }}">
               <li><i class="fi fi-rs-user-add"></i><span style="margin-left: 10px;"> Daftar Petugas</span>
               <li>
             </a></div>
             <div class="list-item"><a href="{{ route('petugas.tambah') }}">
               <li><i class="fi fi-rs-user-add"></i><span style="margin-left: 10px;"> Input Petugas</span>
               <li>
             </a></div>
         </div>
       



       <div class="button-sidebar">
        <a href="{{ route('logout') }}"><button class="signin">Log Out</button></a>
      </div>
     </div>
   </div>