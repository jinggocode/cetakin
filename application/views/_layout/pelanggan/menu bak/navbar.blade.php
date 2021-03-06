  <nav class="navbar fixed-top navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{site_url('Homepage')}}"><i class="fa d-inline fa-lg fa-print"></i><b>  Cetak<b>in</b></b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

      <div class="collapse navbar-collapse text-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item border border-white">
            <a class="nav-link text-white bg-primary" href="{{site_url('Homepage')}}"><i class="fa d-inline fa-lg fa-bookmark-o"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white bg-primary" href="{{site_url('percetakan')}}"><i class="fa d-inline fa-lg fa-list-alt"></i> Daftar Percetakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white bg-primary" href="#"><i class="fa d-inline fa-lg fa-clone"></i> Syarat dan Ketentuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white bg-primary" href="#"><i class="fa d-inline fa-lg fa-question-circle"></i> Cara Penggunaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white bg-primary" href="#"><i class="fa d-inline fa-lg fa-info"></i> Tentang Kami</a>
          </li>
          <li class="nav-item">
            <div class="btn-group justify-content-between d-block d-sm-none">
              <a class="btn btn-primary border-white navbar-btn ml-2 dropdown-toggle hee_maxw200" data-toggle="dropdown"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Pelanggan</a>
              <div class="dropdown-menu ">
                  <a class="dropdown-item" href="{{site_url('pelanggan/pesanan')}}"><i class="fa d-inline fa-lg fa-list-alt"></i> Daftar Pesanan</a>
                  <a class="dropdown-item" href="{{site_url('pelanggan/saldo')}}"><i class="fa d-inline fa-lg fa-money"></i> Lihat Saldo</a>
                  <a class="dropdown-item" href="{{site_url('pelanggan')}}"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Ubah Akun</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{site_url('auth/logout')}}"><i class="fa d-inline fa-lg fa-sign-out"></i> Logout</a>
              </div>
            </div>
          </li>
      
        </ul> 
      </div>
      <div class="btn-group text-right justify-content-between d-none d-sm-block">
        <a class="btn btn-primary border-white navbar-btn ml-2 dropdown-toggle hee_maxw200" data-toggle="dropdown"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Pelanggan</a>
        <div class="dropdown-menu ">
          <a class="dropdown-item" href="{{site_url('pelanggan/pesanan')}}"><i class="fa d-inline fa-lg fa-list-alt"></i> Daftar Pesanan</a>
          <a class="dropdown-item" href="{{site_url('pelanggan/saldo')}}"><i class="fa d-inline fa-lg fa-money"></i> Lihat Saldo</a>
          <a class="dropdown-item" href="{{site_url('pelanggan')}}"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Ubah Akun</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{site_url('auth/logout')}}"><i class="fa d-inline fa-lg fa-sign-out"></i> Logout</a>
        </div>
      </div>
    </div>
  </nav>  <br>
  <div class="mb-4"></div>