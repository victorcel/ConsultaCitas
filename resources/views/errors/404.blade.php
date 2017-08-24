@extends('home1')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="gray-bg">
                        <div class="fof">
                            <!-- 404 error -->
                            <div class="container  error-inner wow flipInX">
                                <h1>404, Página no encontrada.</h1>
                                <p class="text-center">La página que busca no existe o se ha producido otro error.</p>
                                <a class="btn btn-info" href="{{ url('/') }}">VOLVER A LA PÁGINA DE INICIO</a>
                            </div>
                            <!-- /404 error -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection