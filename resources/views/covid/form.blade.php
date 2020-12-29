@extends('master.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">FORM UPLOAD GIS COVID</h3>
              </div>
              {{ Form::open(['route' => 'gis.store','enctype' => 'multipart/form-data','files' => 'true']) }}
                <div class="card-body">
                <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                  
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('kecamatan','Kecamatan') }}
                    {{ Form::text('kecamatan','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    {{ Form::label('warna', 'Warna') }}
                        <select name="warna" class="form-control">
                          <option value="#00FF00">Zona Tidak Terdampak</option>
                          <option value="#FFFF00">Zona Resiko Rendah</option>
                          <option value="#FFA500">Zona Resiko Sedang</option>
                          <option value="#FF0000">Zona Resiko Tinggi</option>
                        </select>
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
                
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    {{ Form::label('zona', 'Zona') }}
                        <select name="zona" class="form-control">
                          <option value="Zona Tidak Terdampak">Zona Tidak Terdampak</option>
                          <option value="Zona Resiko Rendah">Zona Resiko Rendah</option>
                          <option value="Zona Resiko Sedang">Zona Resiko Sedang</option>
                          <option value="Zona Resiko Tinggi">Zona Resiko Tinggi</option>
                        </select>
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('kasus','Kasus') }}
                    {{ Form::text('kasus','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('featured_image') ? ' has-error' : '' }}">
                                {{ Form::label('featured_image', 'Product Image') }}
                                {{ Form::file('featured_image', ['class'=>'form-control', 'placeholder'=>'']) }}
                                {{ $errors->first('', '<p class="help-block"></p>') }}
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