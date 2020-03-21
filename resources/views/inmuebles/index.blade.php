@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Inmuebles</h1>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                
                <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 offset-md-9">
                        <a class="btn btn-success" data-toggle="modal" data-target="#crearInmueble" style="border-radius: 30px; color: white;">
                            <span> Nuevo Inmueble </span>
                        </a>
                    </div>
                </div>
            </div>
                    
        
            <div class="col-md-12">
                <hr>

                        <table class="table table-hover" id="myTable" width="100%">
                            <thead>
                                <tr>
                                    <th>Idem</th>
                                    <th>Tipo</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#editarInmueble" class="btn btn-warning btn-sm">Editar</a>

                                            <a href="#" data-toggle="modal" data-target="#eliminarInmueble" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach()
                            </tbody>
                        </table>

                <!-- <cargaInfinita @infinite="infiniteHandler">
                    <div slot="no-more">No hay mas datos</div>
                    <div slot="spinner">Cargando...</div>
                    <div slot="no-results">Sin Resultados</div>
                </cargaInfinita> -->
                <!-- <infinite-loading @infinite="infiniteHandler"></infinite-loading> -->

            </div>
            
        </div>
        

    </div>

    <form method="POST">
                <div class="modal fade" id="crearInmueble" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Nuevo Inmueble</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <input type="text" v-model="idem" name="idem" placeholder="Idem del Inmueble" class="form-control">
		                                </div>
		                            </div>
		                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select type="text" v-model="tipo" name="tipo" placeholder="Status de inmueble" class="form-control">
                                                <option value="Casa">Casa</option>
                                                <option value="Apartamento">Apartamento</option>
                                                <option value="Anexo">Anexo</option>
                                                <option value="Habitación">Habitación</option>
                                                <option value="Otro">Otro</option>
                                            </select>
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
                <div class="modal fade" id="editarInmueble" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Editar Inmueble</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <input type="text" v-model="idem" name="idem" placeholder="Idem del Inmueble" class="form-control">
		                                </div>
		                            </div>
		                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select type="text" v-model="tipo" name="tipo" placeholder="Status de inmueble" class="form-control">
                                                <option value="Casa">Casa</option>
                                                <option value="Apartamento">Apartamento</option>
                                                <option value="Anexo">Anexo</option>
                                                <option value="Habitación">Habitación</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
		                        <div class="row">
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <select type="text" v-model="status" name="status" placeholder="Status del Inmueble" class="form-control">
		                                    	<option value="Disponible">Disponible</option>
		                                    	<option value="No Disponible">No Disponible</option>
		                                    </select>
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
                <div class="modal fade" id="eliminarInmueble" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Eliminar Inmueble</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2>¡Atención!</h2>
                                <h4>¿Está realmente seguro de querer eliminar este Inmueble?</h4>
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