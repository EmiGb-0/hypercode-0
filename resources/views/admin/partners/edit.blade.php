@extends('adminlte::page')

@section('title', 'HyperCode | Admin')

@section('content_header')
    <h1>HyperCode Dashboard</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($partner, ['route' => ['admin.partners.update', $partner], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Titulo') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del partner']) !!}

                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    
                    <br>

                    {!! Form::label('subtitle', 'Subtitulo') !!}
                    {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del partner']) !!}

                    @error('subtitle')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                    <br>

                    {!! Form::label('image', 'Imagen') !!}
                    {!! Form::text('image', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la imagen del partner']) !!}

                    @error('image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                    <br>

                    {!! Form::label('link', 'Link') !!}
                    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el link del partner']) !!}

                    @error('link')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar Partner', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

    <div class="card mb-12">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Atencion</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-danger">Maxima</td>
                        <td>Las imagenes tienen que venir de un cdn si no sabes que es o como ponerlo contacta con EmiGb</td>
                    </tr>
                    
                    <tr>
                        <td class="text-danger">Maxima</td>
                        <td>El Titulo es el nombre del partner</td>
                    </tr>

                    <tr>
                        <td class="text-danger">Maxima</td>
                        <td>El Subtitulo es la descripcion del partner</td>
                    </tr>

                    <tr>
                        <td class="text-danger">Maxima</td>
                        <td>El link es a donde mandara la seccion de partner</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p class="text-danger">Si no sabes nada acerca de, no toques nada y contacta a EmiGb</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
