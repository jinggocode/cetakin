@layout('_layout/pelanggan/index')

@section('title')Beranda@endsection

@section('style')
<style>
.bg {
  background-image: url({{site_url('assets/image/bg.jpg')}});

    /* Set a specific height */
    height: 600px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bg-join {
  background-image:   url({{site_url('assets/image/bg.jpg')}});

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #cccccc;
}
</style>
@endsection

@section('content')
  <div class="py-5 text-center bg" style="">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-4 text-primary"><b>Era Percetakan Digital</b></h1>
          <p class="lead mb-5">Cetak Dokumen atau Foto dimanapun dan kapanpun
            <br>Tersedia berbagai pilihan tempat percetakan! </p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-4">
    <div class="container">
      <h1 class="text-center mb-4"><b>Mengapa Menggunakan <span class="text-primary">Cetakin?</span></b></h1>
      <hr align="center" style="width: 20%;">
      <div class="row mt-5">
      <div class="col-md-4 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-ioxhost"></i>
          <h3 class="my-2">Efisien</h3>
          <p class="">Tidak perlu datang ke percetakan untuk mengirimkan file yang akan dicetak</p>
        </div>
        <div class="col-md-4 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-hourglass-end"></i>
          <h3 class="my-2">Hemat Waktu</h3>
          <p class="">Ambil pesananmu ketika status pesanan telah selesai</p>
        </div>
        <div class="col-md-4 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-home"></i>
          <h3 class="my-2">Tentukan Percetakanmu</h3>
          <p class="">Tersedia berbagai pilihan percetakan yang siap melayanimu</p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-4 bg-light">
    <div class="container">
      <h1 class="text-center"><b>Mau Cetak Apa <span class="text-primary">Hari ini?</span></b></h1>
      <hr align="center" class="text-dark border border-primary mb-5" style="width: 6%">
      <div class="row text-center mt-4">
        <div class="col-md-6">
            <div class="center" onclick="window.location.href='{{site_url('percetakan/daftar/dokumen')}}'">
              <img class="img-fluid image-hover" width="200" src="{{site_url('assets/image/dokumen.png')}}" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title">Dokumen</h5>
              <a href="{{site_url('percetakan/daftar/dokumen')}}" class="btn btn-primary">Lihat Daftar Percetakan Dokumen</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="center" onclick="window.location.href='{{site_url('percetakan/daftar/foto')}}'">
              <img class="img-fluid image-hover" width="200" src="{{site_url('assets/image/foto.png')}}" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title">Foto</h5>
              <a href="{{site_url('percetakan/daftar/foto')}}" class="btn btn-primary">Lihat Daftar Percetakan Foto</a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 text-center section-aquamarine bg-join" style="background-image: url({{site_url('assets/image/bg.jpg')}});">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4 mb-0">Parallax</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modal')
<div class="modal hide fade" id="infoNotif">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Haloo.. Selamat Datang!</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Segera aktifkan Notifikasi untuk mendapatkan informasi terkini mengenai investasi anda di Jinggofarm!
          <div align="center" class="py-3">
            <button onclick="return getMsg()" type="submit" name="button" class="btn btn-primary" style="cursor: pointer;"><i class="fa fa-bell"></i> Aktifkan Notifikasi</button>
          </div>
          Setelah itu klik <b>Ijinkan</b> / <b>Allow</b>
          <div class="row pt-3">
            <div class="col-md-6">
              <h5>Smartphone</h5>
              <img src="{{base_url('assets/image/notifikasi/hp.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
              <h5>Komputer</h5>
              <img src="{{base_url('assets/image/notifikasi/computer.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection 

@section('script')
<?php if ($this->ion_auth->logged_in()) { ?>
  <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
  <script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBJs4Po8Iwjy6quq7wDI4u4lPhFL-HpoYY",
    authDomain: "cetakin-1.firebaseapp.com",
    databaseURL: "https://cetakin-1.firebaseio.com",
    projectId: "cetakin-1",
    storageBucket: "cetakin-1.appspot.com",
    messagingSenderId: "377345303841"
  };
  firebase.initializeApp(config);

  const messaging = firebase.messaging();

  function getMsg() {
    messaging.requestPermission().then(function() {
      return messaging.getToken();
    })
    .then(function(token) {

      $(document).ready(function(){
        $.ajaxSetup({
            data: {
                csrf_test_name: $.cookie('csrf_cookie_name')
            }
        });

        $.ajax({
            type:'POST',
            url:'<?php echo site_url('homepage/store_token'); ?>',
            data:{token : token},
            success:function(data){
              $('#infoNotif').modal('hide');
              swal("Berhasil!", "Notifikasi Berhasil di Aktifkan", "success");
            }
        });
      });
    })
    .catch(function(err) {
      console.log('Unable to get permission to notify.', err);
    });

    messaging.onMessage(function(payload){
      console.log('onMessage',payload);
    })
  }
  </script>
  <script type="text/javascript">
      $(window).on('load',function(){
        if (Notification.permission == "default") {
          $('#infoNotif').modal('show');
        }
      });
  </script>
<?php } ?>
@endsection
