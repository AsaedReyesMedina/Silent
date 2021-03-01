<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compañias') }}
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
                      <h5 class="card-title">Información de compañias</h5>
                      <p class="card-text">Mira el total de compañias registradas aqui.</p>
                      <a href="#" class="btn btn-primary">Registra una compañia</a>
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
                        @foreach ($companias as $compania)
                            <tr>
                            <td> {{$compania->nombre}} </td>
                            <td> {{$compania->email}} </td>
                            <td> {{$compania->logo}} </td>
                            <td> {{$compania->website}} </td>
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
