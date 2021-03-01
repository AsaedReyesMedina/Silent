@extends('layouts.plantilla')
@section('title','Compañias Edición')
    
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-white borde sombra" style="background-color: #080808;">
                    <div class="card-body">
                        <form action=" {{route('companias.update',$compania)}} " method="POST" class="row g-3">
                            @csrf
                            @method('put')
                            <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="validationDefault01" name="nombre" value=" {{$compania->nombre}} " required>
                            </div>
                            <div class="col-md-4">
                              <label for="validationDefaultUsername" class="form-label">Email</label>
                              <div class="input-group">
                                <input type="email" class="form-control" id="validationDefaultUsername" value=" {{$compania->email}} " name="email" aria-describedby="inputGroupPrepend2" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationDefault03" class="form-label">Website</label>
                              <input type="text" class="form-control" id="validationDefault03" value=" {{$compania->website}} " name="website" required>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">logo</label>
                                <input type="text" class="form-control" id="validationDefault03" value=" {{$compania->logo}} " name="logo" required>
                              </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Actualizar compañia</button>
                            </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
@endsection