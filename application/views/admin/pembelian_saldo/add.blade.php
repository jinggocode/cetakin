@layout('_layout/admin/index')

@section('title') Data Pembelian Saldo@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Pembelian Saldo
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-book"></i> &nbsp Kelola Data</li>
        <li><a href="{{site_url('admin/pembelian_saldo')}}"><i class="fa fa-list-alt"></i> Data Pembelian Saldo</a></li>
        <li class="active">Tambah Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      <div class="box-header with-border">
      <a href="{{site_url('admin/pembelian_saldo')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> kembali</a>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-6 col-lg-12">
              <!-- form alert -->
              @if (!empty(validation_errors()))
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><strong>Peringatan</strong></h4>
                <p>{{validation_errors()}}</p>
              </div>
              @endif
            </div>
            <!-- end form alert -->
          </div>
          <form class="form-horizontal" action="{{site_url('admin/pembelian_saldo/save')}}" method="post">
          {{$csrf}}
            <div class="form-group">
              <label for="first_name" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="first_name" class="form-control" value="{{set_value('first_name')}}" id="first_name" placeholder="Nama">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" value="{{set_value('email')}}" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="password" class="form-control" value="{{set_value('password')}}" id="password" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-sm-2 control-label">Nomor Telp</label>
              <div class="col-sm-10">
                <input type="tel" name="phone" class="form-control" value="{{set_value('phone')}}" id="phone" placeholder="Nomor telp">
              </div>
            </div>
            <div class="form-group">
              <label for="alamat" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" class="form-control" id="alamat">{{set_value('alamat')}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <a href="" class="btn btn-warning"><i class="fa fa-refresh"></i> Refresh</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection