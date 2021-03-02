<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
    </x-slot>

    <div class="container-fluid"><br> 
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                      Bienvenido
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Información de empleados</h5>
                      <p class="card-text">Mira el total de empleados registradas aqui.</p>
                      <a href="#" class="btn btn-primary">Registra una empleado</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-9">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Emailmail</th>
                            <th>Telefono</th>
                            <th>Genero</th>
                            <th>Compañia</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                          
                        @foreach ($empleados as $empleado)
                            <tr>
                            <td> {{$empleado->primer_nombre}} </td>
                            <td> {{$empleado->last_name}} </td>
                            <td> {{$empleado->email}} </td>
                            <td> {{$empleado->telefono}} </td>
                            <td> {{$empleado->genero}} </td>
                            <td> {{$empleado->compania_id}} </td>
                            <td><a class="btn btn-primary" href=" {{route('empleados.edit',$empleado)}} " role="button">Actualizar</a></td>
                            <td><form action=" {{route('empleados.destroy',$empleado)}} " method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Emailmail</th>
                            <th>Telefono</th>
                            <th>Genero</th>
                            <th>Compañia</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div><br>
</x-app-layout>