@extends('layouts.panel')

@section('content')

    <div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Nuevo empleado</h3>
        </div>
        <div class="col text-right">
            <a href="{{route('empleados.view')}}" class="btn btn-sm btn-success">Regresar </a>
            <i class="fa fa-arrow-circle-left"></i>
        </div>
        </div>
    </div>

    <div class="card-body ">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>  
                    <strong>Por favor!! </strong>{{$error}}  
                </div>                 
            @endforeach             
        @endif
        <form action="{{route('empleado.sendData')}}" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="name">Nombre y apellidos del empleado</label>
                <input type="text" name="name" class="form-control" placeholder="Ingrese los nombres y apellidos del empleado" value="{{old('name')}}">
            </div>
            <div class="form-group ">
                <label for="dno">DNI del empleado</label>
                <input type="text" name="dni" class="form-control" placeholder="Ingrese el DNI del empleado" value="{{old('dni')}}">
            </div>
            <div class="form-group">
                <label for="email">Email del empleado</label>
                <input type="text" name="email" class="form-control" placeholder="Ingrese el e-mail del empleado" value="{{old('email')}}" >
            </div>
            <div class="form-group">
                <label for="celular">Celular del empleado</label>
                <input type="text" name="celular" class="form-control" placeholder="Ingrese el numero de celular del empleado" value="{{old('celular')}}">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion del empleado</label>
                <input type="text" name="direccion" class="form-control" placeholder="Ingrese la direccion del empleado" value="{{old('direccion')}}">
            </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear nuevo restaurante</button>
        </form>

    </div>
    </div>
        
@endsection
