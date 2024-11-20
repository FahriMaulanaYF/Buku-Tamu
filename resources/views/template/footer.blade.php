
<script>
    const menu = document.getElementById('menu-label');
    const sidebar = document.getElementsByClassName('sidebar')[0];

    menu.addEventListener('click', function() {
      sidebar.classList.toggle('hide');
      console.log('ok');
    })
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Tambahkan SweetAlert2 via CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</body>

</html>