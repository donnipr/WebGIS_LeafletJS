@extends('master.backend')

@section('content')


<section class="content">
      <div class="container-fluid">
      @include('flash::message')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA GIS COVID PEMDA GUNUNGKIDUL</h3>
              
              <div class="card-tools float-right">
              <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a href="{{ route('gis.create') }}" class="btn btn-block btn-outline-success btn-sm nav-icon far fa-plus-square" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add Data"><i class="glyphicon glyphicon-plus"></i> Add Data</a></li>
                    
                  </ul>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <table class="table table-bordered">
                <br/>
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kecamatan</th>
                      <th>Zona</th>
                      <th>Geojson</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                    @foreach($data as $key)
                    <tr>
                     <td>{{ $no++ }}</td>
                     <td>{{$key->kecamatan}}</td>
                     <td>{{$key->zona}}</td>
                     <td>{{$key->upload}}</td>
                     <td>
                      <a class="btn btn-info btn-sm nav-icon fas fa-edit" href="{{ route('gis.edit', $key->id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit">  </a>
                      <a href="" onclick="return confirm('Are you sure want to delete data selected?')" class="btn btn-danger btn-sm far fa-trash-alt" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class=""></i></a>
                     </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                {{ $data->links() }}
                </ul>
              </div>
            </div>
            <!-- /.card -->

           
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    @endsection