@extends('admin.template.main')

@section('title' , 'Aspirantes')

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
    <h1 class="pb-2">Listado de Aspirantes.</h1>
    <p>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Nuevo Aspirante</a>
    </p>
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
            <th scope="col">C. Partida nac.</th>
            <th scope="col">C. Titulo</th>
            <th scope="col">Cert. Calif</th>
            <th scope="col">Opsu</th>
            <th scope="col">F. Negro</th>
            <th scope="col">Acciones</th>
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
            <td>
                {{-- <form action="{{ route('users.destroy' , $user) }}" method="POST">
                        {{  method_field('DELETE') }}
                        {!! csrf_field() !!}
                    <a href="{{ route('users.show' , $user) }}" class="btn btn-link" ><span class="oi oi-eye"></span></a>
                    <a href="{{ route('users.edit' , $user) }}" class="btn btn-link" ><span class="oi oi-pencil"></span></a>
                    <button class="btn btn-link" type="submit"><span class="oi oi-trash"></span></button>
                </form> --}}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No hay usuarios registrados</p>
@endif

    <center class="centered">
        <button type="submit" class="btn btn-success">!Lista Definitiva!</button>
    </center>


    </form>
        </div>
    </div>
@endsection