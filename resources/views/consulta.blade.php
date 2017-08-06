@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Datos de tu Cita</div>

                    <div class="panel-body">

                        @if(count($query)>=1)
                            @foreach($query as $q)
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nombre Completo</th>
                                        <th>Asunto</th>
                                        <th>Fecha y Hora</th>
                                        <th>Estado</th>
                                        <th>Observaciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>{{ $q->NombreCompleto  }}</th>
                                        <th>{{ $q->nombre }}</th>
                                        <th>{{ $q->fecha_usuario_desea_cita }}-{{ $q->hora }}:{{ $q->meridiano }}</th>
                                        @if($q->estado='p')
                                            <th>Por confirmar</th>
                                        @endif
                                        <th>llegar 15 min antes</th>
                                    </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        @else
                            <h3>El numero de identificacion no tiene agendado una cita</h3>
                        @endif
                        <a class="btn btn-primary" href="{{ url('/') }}">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
