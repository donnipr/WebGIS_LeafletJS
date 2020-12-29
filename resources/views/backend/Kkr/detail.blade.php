@extends('master.backend')

@section('content')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <a href="{{ route('kkr.index') }}" class="btn btn-primary btn-block mb-3">Back to Data View</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pemohon</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                  <a href="#" class="nav-link">
                      <i class=""></i>- Nama : {{ $data->nama_pemohon }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Alamat : {{ $data->alamat_pemohon }}
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lokasi Tanah</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                  <a href="#" class="nav-link">
                      <i class=""></i>- Alamat : {{ $data->lokasi_izin }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Padukuhan : {{ $data->padukuhan }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Kalurahan : {{ $data->desa }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Kapanewon : {{ $data->kecamatan }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Kabupaten : {{ $data->kabupaten }}
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tanah</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                  <a href="#" class="nav-link">
                      <i class=""></i>- Status : {{ $data->status_tanah }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Luas : {{ $data->luas }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Coordinate : {{ $data->latlong }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>- Pola Ruang : {{ $data->pola_ruang }}
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        <div class="col-md-7">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">No KKR : {{ $data->no_kkr }} </h3>

              
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h6>Tanggal Rekom : {{ $data->tahun_kkr }}
              </div>
              <!-- /.mailbox-read-info -->
              
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">  
              <embed type="application/pdf" src="{{asset('image/'.$data->image)}}" width="600" height="400"></embed>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
           
            <!-- /.card-footer -->
            <div class="card-footer">
              <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
              <button type="button" class="btn btn-default"><i class="fas fa-cloud-download-alt"></i> Download</button>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content --> 
@endsection