@extends('home1')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Consulta tu Cita</div>
                    @include('errors')
                    <div class="panel-body">
                        {!! Form::open(['route' => 'consulta', 'method' => 'post'] ) !!}

                        <div class="form-group">
                            {!! Form::label('tipo', 'Tipo Identificacion') !!}
                            {!! Form::select('tipo', ['RT' => 'REGRISTRO CIVIL','TD' => 'TARJETA DE IDENTIDAD','CC' => 'CEDULA DE CUIDADANIA',], null, ['placeholder' => 'Selecione...','class' => 'form-control','required' =>'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('numeroid', 'Numero Identificacion') !!}
                            {!! Form::number('numeroid', null, ['class' => 'form-control','min'=>'0','required' =>'required']) !!}
                        </div>
                        {!! Captcha::display() !!}
                        </br>
                        <div class="form-group">
                            {!! Form::submit('Consultar', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                        {!! Captcha::script() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
