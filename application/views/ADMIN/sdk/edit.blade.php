@layout('_layout/admin/index')

@section('title') Data Syarat dan Ketentuan@endsection

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Syarat dan Ketentuan
    </h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-book"></i> &nbsp Kelola Data</li>
      <li><a href="{{site_url('admin/sdk')}}"><i class="fa fa-list-alt"></i> Syarat dan Ketentuan</a></li>
      <li class="active">Edit Data</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
      <a href="{{site_url('admin/sdk')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
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
        <form class="form-horizontal" action="{{site_url('admin/sdk/update')}}" method="post">
        {{$csrf}}
        {{form_hidden('id', $data->id);}}
          <div class="form-group">
            <label for="target" class="col-sm-2 control-label">Status Akun</label>
            <div class="col-sm-10">
              <select name="target" class="form-control" id="target">
                <option {{($data->target == '0')?'selected':''}} value="0">Pelanggan</option>
                <option {{($data->target == '1')?'selected':''}} value="1">Petugas</option> 
                <option {{($data->target == '2')?'selected':''}} value="2">Percetakan</option> 
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" value="{{$data->nama}}" id="nama" placeholder="Nama">
            </div>
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea name="deskripsi" class="form-control" id="deskripsi">{{$data->deskripsi}}</textarea>
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