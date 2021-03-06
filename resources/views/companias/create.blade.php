@extends('layouts.plantilla')
@section('title','Compañias Create')
    
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-white borde sombra" style="background-color: #080808;">
                    <div class="card-body">
                        <form action=" {{route('companias.store')}} " method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="validationDefault01" name="nombre" required>
                            </div>
                            <div class="col-md-4">
                              <label for="validationDefaultUsername" class="form-label">Email</label>
                              <div class="input-group">
                                <input type="email" class="form-control" id="validationDefaultUsername" name="email" aria-describedby="inputGroupPrepend2" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationDefault03" class="form-label">Website</label>
                              <input type="text" class="form-control" id="validationDefault03" name="website" required>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">logo</label>
                                <input type="text" class="form-control" id="validationDefault03" name="logo" required>
                              </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Registrar compañia</button>
                            </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
@endsection