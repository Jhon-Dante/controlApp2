@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Residentes</h1>
            </div>
        </div>
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                
                <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 offset-md-9">
                            <a class="btn btn-success" data-toggle="modal" data-target="#crearResidente" style="border-radius: 30px; color: white;">
                                <span> Nuevo Residente </span>
                            </a>
                        </div>
                    </div>
                </div>
                    
            
            <div class="col-md-12">
                <hr>

                        <table class="table table-hover" id="myTable" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Rut</th>
                                    <th>Telefono</th>
                                    <th>Usuario</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($residentes as $key)
                                    <tr>
                                        <td>{{$key->nombres}} {{$key->apellidos}}</td>
                                        <td>{{$key->rut}}</td>
                                        <td>{{$key->telefono}}</td>
                                        <td>{{$key->name}}</td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#editarResidente" class="btn btn-warning btn-sm">Editar</a>

                                            <a href="#" data-toggle="modal" data-target="#eliminarResidente" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach()
                            </tbody>
                        </table>

            </div>
            
        </div>
        

    </div>

    <form method="POST">
                <div class="modal fade" id="crearResidente" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Nuevo Residente</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <input type="text" name="nombres" placeholder="Nombres del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="apellidos" placeholder="Apellidos del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="number" name="rut" placeholder="Rut del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="number" name="telefono" placeholder="Teléfono del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" >Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form method="POST">
                <div class="modal fade" id="editarResidente" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Editar Residente</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <input type="text" name="nombres" placeholder="Nombres del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="apellidos" placeholder="Apellidos del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="number" name="rut" placeholder="Rut del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="number" name="telefono" placeholder="Teléfono del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email del residente" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id">
                                <button type="submit" class="btn btn-success" >Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

             <form method="POST">
                <div class="modal fade" id="eliminarResidente" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Eliminar Residente</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2>¡Atención!</h2>
                                <h4>¿Está realmente seguro de querer eliminar a este residente?</h4>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id">
                                <button type="submit" class="btn btn-success" >Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    

@endsection

<script type="text/javascript">
    function editar(argument) {
        // body...
    }

    function eliminar(argument) {
        // body...
    }
</script>