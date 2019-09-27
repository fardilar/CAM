<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<div class="contaner bg-light">
    <div class="row justify-content-center mt-3 pt-3">
        <div class="col-md-6">
            <h1>COTIZACION SERVICIO</h1>
            <hr class="bg-info">
          
            <ul class="">
                <li class="list-group-item active text-center"><strong>REGISTRO<strong></li>
                <li class="list-group-item"><strong>CEDULA_NIT: </strong> {{$request->Cedula_Nit}}</li>
                <li class="list-group-item"><strong>CLIENTE: </strong> {{$request->Nombre}}</li>
                <li class="list-group-item"><strong>TELEFONO: </strong> {{$request->Telefono}}</li>
                <li class="list-group-item"><strong>EMAIL: </strong> {{$request->Email}}</li>
            </ul>
            <br>
            <table id="clientes" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                
                @for($i = 1 ; $i <= $request->contador; $i++)
                   {{$idserinput = "idserinput".$i}}
                   {{$serv = "serinput".$request->$idserinput }}
                   {{$valor = "valor".$request->$idserinput}}
                   {{$regioser = "regioser".$request->$idserinput}}
                    <tr>
                        <td>{{$request->$serv}} {{$request->$regioser}}</td>
                        <td>${{$request->$valor}}</td>
                    </tr>
                @endfor

               
                <tr>
                    <td><strong>TOTAL: </strong></td>
                    <td><strong>{{$request->valortotal}}</strong></td>
                </tr>   
                </tbody>
            </table>
           
          
        </div>
    </div>
</div>
</body> 
</html>
