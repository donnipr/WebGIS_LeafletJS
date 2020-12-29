@extends('master.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">UPDATE DATA COVID</h3>
              </div>
              {{ Form::model($data, ['route'=>['gis.update', $data->id], 'method'=>'PATCH']) }}
                <div class="card-body">
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{ Form::label('zona', 'Status Zona') }}
                                <select name="zona" class="form-control">
                                    @if($data->zona == '#00FF00')
                                        <option value="#00FF00">Zona Tidak Terdampak</option>
                                        <option value="#FFFF00">Zona Resiko Rendah</option>
                                        <option value="#FFA500">Zona Resiko Sedang</option>
                                        <option value="#FF0000">Zona Resiko Tinggi</option>
                                    @elseif($data->zona == '#FFFF00')
                                        <option value="#FFFF00">Zona Resiko Rendah</option>
                                        <option value="#00FF00">Zona Tidak Terdampak</option>
                                        <option value="#FFA500">Zona Resiko Sedang</option>
                                        <option value="#FF0000">Zona Resiko Tinggi</option>
                                    @elseif($data->zona == '#FFA500')
                                        <option value="#FFA500">Zona Resiko Sedang</option>
                                        <option value="#00FF00">Zona Tidak Terdampak</option>
                                        <option value="#FFFF00">Zona Resiko Rendah</option>
                                        <option value="#FF0000">Zona Resiko Tinggi</option>
                                    @elseif($data->zona == '#FF0000')
                                        <option value="#FF0000">Zona Resiko Tinggi</option>
                                        <option value="#00FF00">Zona Tidak Terdampak</option>
                                        <option value="#FFFF00">Zona Resiko Rendah</option>
                                        <option value="#FFA500">Zona Resiko Sedang</option>
                                        
                                    @endif
                                </select>
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