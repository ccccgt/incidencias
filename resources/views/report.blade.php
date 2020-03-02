@extends('layout')

@section('content')
<div class="container" >
    <div class="row ">
            <div class="card card-primary card-outline mt-3" align="left" style="width: 50%;">
              <div class="card-header" align="center">
                <h5>INGRESAR INCIDENCIA</h5>
              </div>
                    <form action="">
                        <div class="form-group mt-3 m-3">
                            <label for="category_id">Categoría:</label>
                            <select name="category_id" class="form-control">
                                
                            </select>                            
                        </div>
                        <div class="form-group m-3" >
                            <label for="severity">Prioridad:</label>
                            <select name="severity" class="form-control">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="M">Alta</option>
                            </select>
                        </div>
                        <div class="form-group m-3">
                            <label for="assing_id">Asignar a:</label>
                            <select name="assing_id" class="form-control">
                                
                            </select>                            
                        </div>
                        <div class="form-group m-3">
                            <label for="title">Título:</label>
                            <input type="text" value="" class="form-control" placeholder="Ingrese el Titulo aca...">
                        </div>
                        <div class="form-group m-2 m-3">
                            <label for="description">Descripción:</label>
                            <textarea name="description"  rows="10" class="form-control" placeholder="Ingrese la Descripción aca....."></textarea>                                
                        </div>
                        <div class="card-footer text-muted">
                            <button class="btn btn-primary">Registrar Incidencia</button>
                        </div>
                    </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->

@endsection