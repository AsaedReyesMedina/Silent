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
                      <a href="{{ route('companias.create') }}" class="btn btn-primary">Registra una compañia</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-9">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>Website</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companias as $compania)
                            <tr>
                            <td> {{$compania->nombre}} </td>
                            <td> {{$compania->email}} </td>
                            <td> {{$compania->logo}} </td>
                            <td> {{$compania->website}} </td>
                            <td><a class="btn btn-primary" href=" {{route('companias.edit',$compania)}} " role="button">Actualizar</a></td>
                            <td><form action=" {{route('companias.destroy',$compania)}} " method="POST">
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
                            <th>email</th>
                            <th>logo</th>
                            <th>website</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div><br>
</x-app-layout>
