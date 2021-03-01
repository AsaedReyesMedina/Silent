@extends('layouts.plantilla')
@section('title','Empleados CRUD')
    
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-white borde sombra" style="background-color: #080808;">
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-4">
                              <label for="validationDefault01" class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                            </div>
                            <div class="col-md-4">
                              <label for="validationDefault02" class="form-label">Apellido</label>
                              <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                            </div>
                            <div class="col-md-4">
                              <label for="validationDefaultUsername" class="form-label">email</label>
                              <div class="input-group">
                                <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationDefault03" class="form-label">City</label>
                              <input type="text" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-md-3">
                              <label for="validationDefault04" class="form-label">State</label>
                              <select class="form-select" id="validationDefault04" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <label for="validationDefault05" class="form-label">Zip</label>
                              <input type="text" class="form-control" id="validationDefault05" required>
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                  Agree to terms and conditions
                                </label>
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                          </form>
                      </div>
                </div>
            </div>
        </div>
@endsection