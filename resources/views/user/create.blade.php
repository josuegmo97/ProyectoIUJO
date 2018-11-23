@extends('admin.template.main')

@section('title' , 'Registro')

@section('navtitle' , 'Registro de Aspirante')

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

    <div class="card">
        <h3 class="card-header">Información Personal</h3>
        <div class="card-body">

    @if(count($errors) > 0)
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br>

        <form action="{{ route('user.store') }}" method="POST">
        {!! csrf_field() !!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Introduzca su nombre...">
                </div>

                <div class="form-group col-md-6">
                    <label for="lastname">Apellido:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="Introduzca su apellido...">
                </div>

                <div class="form-group col-md-4">
                    <label for="document">Cédula de Identidad:</label>
                    <input type="number" class="form-control" id="document" name="document" value="{{ old('document') }}" placeholder="Introduzca su cédula de identidad...">
                </div>

                <div class="form-group col-sm-4">
                    <label for="genre">Género:</label>
                    <select required name="genre" value="{{ old('genre') }}" class="form-control">
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="birthday">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" id="birthday" value="{{ old('birthday') }}" name="birthday">
                </div>
            </div>
        </div>
    </div>
            {{-- Lo de arriba esta hecho  a nivel de maquetacion faltan algunas cosas--}}
            <br>

            <div class="card">
            <h3 class="card-header">Documentos Consígnados</h3>
            <div class="card-body">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="copyDocument">Copia cédula identidad:&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-check-input" type="radio" name="copyDocument" id="copyDocument" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="copyDocument" id="copyDocument" value="No">No
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="copyBirth">Copia partida de nacimiento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-check-input" type="radio" name="copyBirth" id="copyBirth" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="copyBirth" id="copyBirth" value="No">No
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="copyTitle">Copia título bachiller:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-check-input" type="radio" name="copyTitle" id="copyTitle" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="copyTitle" id="copyTitle" value="No">No
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="copyNotes">Copia certificación calificaciones:&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-check-input" type="radio" name="copyNotes" id="copyNotes" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="copyNotes" id="copyNotes" value="No">No
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="copyOpsu">Copia Opsu:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-check-input" type="radio" name="copyOpsu" id="copyOpsu" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="copyOpsu" id="copyOpsu" value="No">No
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="copyBackground">Copia certificación calificaciones:&nbsp;&nbsp;&nbsp;</label>
                        <input class="form-check-input" type="radio" name="copyBackground" id="copyBackground" value="Si">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" name="copyBackground" id="copyBackground" value="No">No
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br>

    <center class="centered">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </center>


    </form>
        </div>
    </div>
@endsection


