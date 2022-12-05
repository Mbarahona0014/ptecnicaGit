<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('mxg_id') }}
            {{ Form::text('mxg_id', $mxgMateriasxgrado->mxg_id, ['class' => 'form-control' . ($errors->has('mxg_id') ? ' is-invalid' : ''), 'placeholder' => 'Mxg Id']) }}
            {!! $errors->first('mxg_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('Id Grado') }}
            {{ Form::text('mxg_id_grd', $mxgMateriasxgrado->mxg_id_grd, ['class' => 'form-control' . ($errors->has('mxg_id_grd') ? ' is-invalid' : ''), 'placeholder' => 'Id Grado']) }}
            {!! $errors->first('mxg_id_grd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Materia') }}
            {{ Form::text('mxg_id_mat', $mxgMateriasxgrado->mxg_id_mat, ['class' => 'form-control' . ($errors->has('mxg_id_mat') ? ' is-invalid' : ''), 'placeholder' => 'Id Materia']) }}
            {!! $errors->first('mxg_id_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>