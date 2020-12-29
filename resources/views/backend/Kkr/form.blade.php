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
              {{ Form::open(['route' => 'kkr.store','enctype' => 'multipart/form-data','files' => 'true']) }}
                <div class="card-body">
                <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                  
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('no_kkr','No KKR') }}
                    {{ Form::text('no_kkr','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('tahun_kkr','Tahun KKR') }}
                    {{ Form::text('tahun_kkr','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
                  
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('nama_pemohon','Nama Pemohon') }}
                    {{ Form::text('nama_pemohon','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('alamat_pemohon','Alamat Pemohon') }}
                    {{ Form::text('alamat_pemohon','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('lokasi_izin','Lokasi Izin') }}
                    {{ Form::text('lokasi_izin','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('padukuhan','Padukuhan') }}
                    {{ Form::text('padukuhan','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div> 

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('desa','Kalurahan') }}
                    {{ Form::text('desa','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>                 
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('kecamatan','Kapanewon') }}
                    {{ Form::text('kecamatan','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div> 
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('kabupaten','Kabupaten') }}
                    {{ Form::text('kabupaten','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div> 

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('luas','Luas M2') }}
                    {{ Form::text('luas','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    {{ Form::label('status_tanah', 'Status Tanah') }}
                        <select name="status_tanah" class="form-control">
                          <option value="0">Hak Milik</option>
                          <option value="1">Tanah Sultan Ground</option>
                          <option value="2">Tanah Kas Desa</option>
                        </select>
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>
              
                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('peruntukan','Peruntukan') }}
                    {{ Form::text('peruntukan','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div> 

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('latlong','Titik Koordinat') }}
                    {{ Form::text('latlong','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('pola_ruang','Pola Ruang') }}
                    {{ Form::text('pola_ruang','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('keterangan','Keterangan') }}
                    {{ Form::text('keterangan','',['class' => 'form-control']) }}
                    {{ $errors->first('', '<p class="help-block"></p>') }}
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : ''  }}"> 
                    {{ Form::label('shpfile','shpfile') }}
                    {{ Form::text('shpfile','',['class' => 'form-control']) }}
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