@extends("../layouts.plantilla")

@section("cabecera")

@endsection()

@section("contenido")
<div class="contaner bg-light">
<div class="row justify-content-center mt-3 pt-3">
    <div class="col-md-5">
        <h1 class="display-4">FORMULARIO CLIENTES</h1>
        <hr class="bg-info">
        <p class="pb-0 mb-0">Por Favor Registre Nuevos Clientes</p>
        <p class="text-danger small pt-0 mt-0">*Todos Los Campos Son Obligatorios</p>
        <form class="" method="post" action="/clientes">
        {{csrf_field()}}
        <div class="row form-group">
                <label for="CedNit" class="col-form-label col-md-4">*Cedula / Nit:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="text" name="Cedula_Nit" value="" id="Cedula_Nit" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label for="Nombrelab" class="col-form-label col-md-4">*Nombre:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="text" name="Nombre" value="" id="Nombre" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label for="Observacioneslab" class="col-form-label col-md-4">*Observaciones:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <textarea rows="3" class="form-control" name="Observaciones" id="Observaciones"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="Direccionlab" class="col-form-label col-md-4">Direccion:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="text" name="Direccion" value="" id="Direccion" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label for="Telefonolab" class="col-form-label col-md-4">Telefono:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="number" name="Telefono" value="" id="Telefono" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label for="Emaillab" class="col-form-label col-md-4">Email:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="mail" name="Email" value="" id="Email" class="form-control">
                </div>
            </div>      
            <button type="submit" class="btn btn-success btn-lg btn-block">Crear Cliente</button>
        </form>
        <form class="" method="get" action="/clientes">
             <button type="submit" class="btn btn-danger btn-lg btn-block mt-2 pt-2">Cancelar</button>
        </form>
    </div>
    </div>
</div>
@endsection()
@section("pie")
@endsection()