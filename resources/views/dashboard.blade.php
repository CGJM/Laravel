@extends('bases.app')
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 style="color:#fff ;" class="panel-title">Bienvenido {{ auth()->user()->name}}</h1>
            </div>
          </div>
        </div>
      </div>

@endsection
