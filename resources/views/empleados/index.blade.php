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
                            <th>email</th>
                            <th>logo</th>
                            <th>website</th>
                        </tr>
                    </thead>
                    <tbody>
                          
                        @foreach ($empleados as $empleado)
                            <tr>
                            <td> {{$empleado->nombre}} </td>
                            <td> {{$empleado->email}} </td>
                            <td> {{$empleado->logo}} </td>
                            <td> {{$empleado->website}} </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>email</th>
                            <th>logo</th>
                            <th>website</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div><br>
</x-app-layout>