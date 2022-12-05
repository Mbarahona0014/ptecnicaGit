@extends('layouts.app')

@section('template_title')
    {{ $mxgMateriasxgrado->name ?? 'Show Mxg Materiasxgrado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mxg Materiasxgrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mxg-materiasxgrados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $mxgMateriasxgrado->mxg_id }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $mxgMateriasxgrado->grdGrado->grd_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $mxgMateriasxgrado->matMaterium->mat_nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
