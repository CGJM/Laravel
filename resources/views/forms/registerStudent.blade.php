@extends('bases.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color:#fff ;" class="panel-title">Registro Estudiantes</h1>
            </div>
            <div class="panel-body">
                <form action="{{route('acceso')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" >
                        <label  style="color:#fff ;"for="numberAccount">Número de cuenta</label>
                        <input type="text" name="numberAccount" placeholder="Ingresa tu numero de cuenta" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="name">Nombre</label>
                        <input type="text" name="name" placeholder="Ingresa tu nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="lastNameP">Apellido</label>
                        <input type="text" name="lastNameP" placeholder="Ingresa tu apellido paterno" class="form-control">
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="password">Apellido</label>
                        <input type="text" name="lastNameM" placeholder="Ingresa tu apellido materno" class="form-control">
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="carrer">Carrera</label>
                        <select  name="carrer" class="form-control">
                          @foreach($carrer as $carrer)
                            <option value="{{ $carrer ['idCarrer']}}">{{ $carrer ['nameCarrer']}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="carrer">Cuatrimestre</label>
                        <select  name="quarter" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="carrer">Group</label>
                        <select  name="carrer" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="email">Correo electrónico</label>
                        <input type="email" name="email" placeholder="Ingresa tu correo" class="form-control">
                    </div>
                    <button class="btn btn-block btn-primary">Insertar</button>
                </form>
                <br>
                <form  action="{{route('back')}}">
                  <button class="btn btn-block btn-danger">Salir</button>
                </form>
            </div>
            <br>

        </div>
    </div>
</div>
</div>
@endsection
