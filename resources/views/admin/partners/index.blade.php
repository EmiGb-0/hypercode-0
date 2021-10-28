@extends('adminlte::page')

@section('title', 'HyperCode | Admin')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.partners.create')}}">Crear Partner</a>
    <h1>Lista de Partners</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($partners as $partner)
                        <tr>
                            <td>
                                {{$partner->id}}
                            </td>
                            <td>
                                {{$partner->title}}
                            </td>
                            <td>
                                {{$partner->subtitle}}
                            </td>

                            <td width="10px">
                                <a class="btn btn-primary" href="{{route('admin.partners.edit', $partner)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.partners.destroy', $partner)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
