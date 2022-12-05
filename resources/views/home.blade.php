@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido!') }}
                    {{-- @foreach ($almAlumnos as $almAlumno)
                                        <tr>
											<td>{{ $almAlumno->alm_id }}</td>
											<td>{{ $almAlumno->alm_codigo }}</td>
											<td>{{ $almAlumno->alm_nombre }}</td>
											<td>{{ $almAlumno->alm_edad }}</td>
											<td>{{ $almAlumno->alm_sexo }}</td>
											<td>{{ $almAlumno->alm_observacion }}</td>
											<td>{{ $almAlumno->grdGrado->grd_nombre }}</td>

                                            <td>
                                                <form action="{{ route('alm-alumnos.destroy',$almAlumno->alm_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alm-alumnos.show',$almAlumno->alm_id) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alm-alumnos.edit',$almAlumno->alm_id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                        @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
