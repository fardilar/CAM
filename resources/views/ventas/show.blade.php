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
    <title>Clientes SERVICIO</title>
    
</head>
<body>
    <div class="contaner bg-light">
    <div class="row justify-content-center mt-3 pt-3">
    <div class="col-md-8">
        <h1 class="display-4">SERVICIO CLIENTES</h1>
    <table id="clientes" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Cliente</th>
            <th>Servicio</th>
            <th>Valor</th>
            <th>Region</th>
            <th>Fecha Venta</th>
            <th>Fecha Pago</th>
            <th>Nota cobro</th>
           
            
        </thead>
        <tbody>
        @foreach($sale as $ventas)
                <tr>
                    <td>{{$ventas->Nombre}}</td>   
                    <td>{{$ventas->Servicio}}</td>   
                    <td>{{$ventas->Valor}}</td>   
                    <td>{{$ventas->Region}}</td>   
                    <td>{{$ventas->fecha_venta}}</td>   
                    <td>{{$ventas->fecha_pago}}</td>
                    <td>{{$ventas->nota_cobro}}</td>    
                </tr>
         @endforeach
        </tbody>
    </table>
    <form class="" method="get" action="/clientes">
             <button type="submit" class="btn btn-danger btn-lg btn-block mt-2 pt-2">Regresar</button>
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