@extends("../layouts.plantilla")

@section("cabecera")
@endsection()


@section("contenido")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes listado</title>
    
</head>
<body>
    <div class="contaner bg-light">
    <div class="row justify-content-center mt-3 pt-3">
    <div class="col-md-8">
        <h1 class="display-4">LISTADO CLIENTES</h1>
    <table id="clientes" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Cedula_Nit</th>
            <th>Nombre</th>
            <th>Observaciones</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->Cedula_Nit}}</td>
                    <td>{{$cliente->Nombre}}</td>
                    <td>{{$cliente->Observaciones}}</td>
                    <td>{{$cliente->Direccion}}</td>
                    <td>{{$cliente->Telefono}}</td>
                    <td>{{$cliente->Email}}</td>
                    <td>
                        <a href="{{route('ventas.show', $cliente->Id)}}"><img src="/images/ver.png"/ width="20px" title="Ver Historial Cliente"></a>
                
                        <a href="{{route('clientes.edit', $cliente->Id)}}"><img src="/images/editar.png"/ width="20px" title="Editar Cliente"></a>
                    
                        <form method="POST" id ="Eliminar" action="/clientes/{{$cliente->Id}}">
                        {{csrf_field()}}                       
                        <button type="button" class="btn btn-link" Onclick="EliminarCliente()"><img src="/images/eliminar.png"/ width="20px" title="Eliminar Cliente"></button>
                        <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form class="" method="get" action="/clientes/create">
        {{csrf_field()}}
    <button type="submit" class="btn btn-primary btn-lg btn-block">Crear Cliente</button>
    </form>
    <form class="mt-1 pt-1" method="get" action="/ventas">
        {{csrf_field()}}
    <button type="submit" class="btn btn-success btn-lg btn-block">Realizar Cotizacion</button>
    
    </form>
   </div>
   </div>
   </div>
   <script> 
        $(document).ready(function() {
            $('#clientes').DataTable({"language": {"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"}});     
        });
    </script> 
</body>
</html>
@endsection()
@section("pie")
@endsection()