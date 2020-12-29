@extends('master.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">FORM KETERANGAN KESESUAIAN RUANG</h3>
              </div>
              {{ Form::open(['route' => 'test.store','enctype' => 'multipart/form-data','files' => 'true']) }}
                <div class="card-body">
                <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                  
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('nama','Nama') }}
                    {{ Form::text('nama','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('alamat','Alamat') }}
                    {{ Form::text('alamat','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
                  
               
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {{ Form::close() }}
            </div>


</div>
</div>
</div>
</div>


@endsection