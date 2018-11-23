@extends('admin.template.main')

@section('title' , 'Lista Definitiva')

@section('content')

    <style>
        .errors{
            background-color: #fcc;
            border: 1px solid #966;
        }
        /* form{
            margin-top: 20px;
            line-height: 1.5em;
        }
        label{
            display: inline-block;
            width: 120px;
        } */

        h3{
            text-align: center;
            color: red;
        }

    </style>

<div class="d-flex justify-content-between align-items-end">
    <h1 class="pb-2">Listado Definitivo de Ingresos.</h1>
    <h3>!! FELICIDADES !!</h3>
</div>


@if($users->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Genero</th>
            <th scope="col">Fecha Nac</th>
            <th scope="col">C. Cedula</th>
            <th scope="col">C. Part nac.</th>
            <th scope="col">C. Titulo</th>
            <th scope="col">Cert. Calif</th>
            <th scope="col">Opsu</th>
            <th scope="col">F. Negro</th>
            {{-- <th scope="col">Acciones</th> --}}
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->document }}</th>
            <td>{{ $user->name }} {{ $user->lastname }}</td>
            <td>{{ $user->genre }}</td>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->copyDocument }}</td>
            <td>{{ $user->copyBirth }}</td>
            <td>{{ $user->copyTitle }}</td>
            <td>{{ $user->copyNotes }}</td>
            <td>{{ $user->copyOpsu }}</td>
            <td>{{ $user->copyBackground }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@else
    <p>No hay usuarios para esta lista</p>
@endif

        </div>
    </div>
@endsection
