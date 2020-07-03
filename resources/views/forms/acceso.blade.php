@extends('bases.app')
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color:#fff ;" class="panel-title">Acceso al sistema de califiaciones</h1>
            </div>
            <div class="panel-body">
                <form action="{{route('acceso')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" >
                        <label  style="color:#fff ;"for="email">Correo electronico</label>
                        <input type="email" name="email" placeholder="Ingresa tu numero de cuenta" class="form-control" value="{{old('numberAccount')}}">
                        {!! $errors->first('email','<span class="help-block" style="color:#fff ;">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label style="color:#fff ;" for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Ingresa tu contraseña" class="form-control">
                        {!! $errors->first('password','<span class="help-block" style="color:#fff ;">:message</span>') !!}
                    </div>
                    <br>
                    <button class="btn btn-block btn-primary">Acceder</button>
                </form>
            </div>
            <br>
            
          <form  action="{{route('back')}}">
            <button class="btn btn-block btn-danger">Salir</button>
          </form>
        </div>
    </div>
</div>

@endsection
