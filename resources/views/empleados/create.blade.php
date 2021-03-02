@extends('layouts.plantilla')
@section('title','Empleados Create')
    
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-white borde sombra" style="background-color: #080808;">
                    <div class="card-body">
                        <form action=" {{route('empleados.store')}} " method="POST" class="row g-3">
                          @csrf
                            <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
                            </div>
                            <div class="col-md-4">
                              <label for="validationDefault02" class="form-label">Apellido</label>
                              <input type="text" class="form-control" id="validationDefault02" name="apellido" required>
                            </div>
                            <div class="col-md-4">
                              <label for="validationDefaultUsername" class="form-label">Email</label>
                              <div class="input-group">
                                <input type="email" class="form-control" id="validationDefaultUsername" name="email" aria-describedby="inputGroupPrepend2" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationDefault03" class="form-label">Telefono</label>
                              <input type="text" class="form-control" id="validationDefault03" name="telefono" required>
                            </div>
                            <div class="col-md-3">
                              <label for="validationDefault04" class="form-label">Compañia</label>
                              <select class="form-select" name="compania" id="validationDefault04" required>
                                <option selected disabled value="">Sleccionar</option>
                                @foreach ($companias as $compania)
                                <option value=" {{$compania->id}}"> {{$compania->nombre}} </option>
                                @endforeach
                                
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="validationDefault05" class="form-label">Genero</label>
                              <select class="form-select" name="genero" id="validationDefault05" required>
                                <option selected disabled value="">Seleccionar</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Registrar empleado</button>
                            </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
@endsection