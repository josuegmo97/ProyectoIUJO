@extends('admin.template.main')

@section('title' , 'Editar')

@section('content')

    <div class="card">
            <h3 class="card-header">Editar Usuario</h3>
            <div class="card-body">

            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="" >
            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="nombre">nombre:</label>
                <input type="text" name="name" class="form-control" id="name" value="">
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" name="email" class="form-control" id="email" value="">
            </div>

            <div class="form-group">
                <label for="password">contraseña:</label>
                <input type="password" name="password" class="form-control" id="email">
            </div>

                <button class="btn btn-success" type="submit">Actualizar</button>

            <a href="" class="btn btn-link" >Regresar al listado de usuarios</a>

            </form>


            </div>
        </div>
@endsection


