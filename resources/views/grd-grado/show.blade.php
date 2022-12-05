@extends('layouts.app')

@section('template_title')
    {{ $grdGrado->name ?? 'Mostrar grado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grd-grados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $grdGrado->grd_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $grdGrado->grd_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
