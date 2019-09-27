@extends("../layouts.plantilla")

@section("cabecera")

@endsection()

@section("contenido")
<div class="contaner bg-light">
<div class="row justify-content-center mt-3 pt-3">
    <div class="col-md-5">
        <h1 class="display-4">COTIZACION SERVICIO</h1>
        <hr class="bg-info">
        <p class="text-danger small pt-0 mt-0">*Todos Los Campos Son Obligatorios</p>
        <form class=""  id="Formcotiza" method="POST" action="/generate-pdf">
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
                <label for="Telefonolab" class="col-form-label col-md-4">*Telefono:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="number" name="Telefono" value="" id="Telefono" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label for="Emaillab" class="col-form-label col-md-4">*Email:</label>
                <div class="col-md-8 mt-0 pt-0">
                    <input type="mail" name="Email" value="" id="Email" class="form-control">
                                  
                </div>
            </div>    
            <div class="row form-group">
                
                <label for="Servicio" class="col-form-label col-md-4">*Servicio:</label>
                <div class="col-md-8 mt-0 pt-0" id="checkid">
                <input type="hidden" name="contador" value="" id="contador" class="form-control">
                <input type="hidden" name="valortotal" value="" id="valortotal" class="form-control">
                    @foreach($service as $servicios)
                        <div class="form-check" >
                                <input class="form-check-input" type="checkbox" value="{{$servicios->Servicio}}" id="serv{{$servicios->Id}}">
                                <input class="form-check-input" type="hidden" value="{{$servicios->Id}}" id="idserv{{$servicios->Id}}">
                                <input type="hidden" name="servic{{$servicios->Id}}" value="{{$servicios->Servicio}}" id="servic{{$servicios->Id}}" class="form-control">
                                <input type="hidden" name="valor{{$servicios->Id}}" value="{{$servicios->Valor}}" id="valor{{$servicios->Id}}" class="form-control">
                                <input type="hidden" name="regioser{{$servicios->Id}}" value="{{$servicios->Region}}" id="regioser{{$servicios->Id}}" class="form-control">

                            <label class="form-check-label col-md-12" for="defaultCheck1" >
                                {{$servicios->Servicio}} - {{$servicios->Region}} 
                            </label>
                        </div> 
                    @endforeach
                </div>
                <div class="col-md-8 mt-0 pt-0" id="servicios">
               
                   
                </div>
                <div class="col-md-8 mt-0 pt-0" id="idser">
               
                   
                </div>
            </div>    
            <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"  data-target="#myModal" id="GenerarCotizacion">GENERAR COTIZACION</button>
            <div class="container">
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                    <h4 class="modal-title">COTIZACION SERVICIO</h4>
                    <button type="button" id="modalcotizacion" class="close" data-dismiss="modal">&times;</button>
                    </div>
                   
                    <div id="modalcot" class="modal-body" >
                        <div class="bg-light">
                            <label class="form-check-label col-md-12" for="defaultCheck1">
                                <strong>CEDULA_NIT:</strong>
                                <label class="form-check-label col-md-8" for="defaultCheck1" id="modalcednit"></label>  
                            </label>
                        </div>                            
                        <div class="bg-light">
                            <label class="form-check-label col-md-12" for="defaultCheck1">
                                <strong>CLIENTE:</strong>
                                <label class="form-check-label col-md-8" for="defaultCheck1" id="modalnombre"></label>  
                            </label>
                        </div>
                        <div class="bg-light">  
                            <label class="form-check-label col-md-12" for="defaultCheck1">
                                <strong>TELEFONO:</strong>
                                <label class="form-check-label col-md-8" for="defaultCheck1" id="modaltelefono"></label>        
                            </label>
                        </div class="bg-light">  
                        
                        <div class="bg-light">
                            <label class="form-check-label col-md-12" for="defaultCheck1">
                                <strong>EMAIL</strong> 
                                <label class="form-check-label col-md-8" for="defaultCheck1" id="modalemail"></label>   
                            </label>
                            
                        </div>
                        
                        <div class="bg-light">
                        <label class="form-check-label col-md-12" for="defaultCheck1">
                            <strong>SEVICIOS</strong> 
                            @foreach($service as $servicios)
                       
                                <label class="form-check-label col-md-12" for="defaultCheck1" id="modalservi{{$servicios->Id}}">
                                                            
                                </label>

                            @endforeach
                   
                        </label>
                        
                        </div>
                        <div class="bg-light">
                        
                        <label class="form-check-label col-md-12" for="defaultCheck1">
                            <strong>TOTAL:</strong> 
                            <label class="form-check-label col-md-8" for="defaultCheck1" id="modalTotalservi">            
                        </label>
                        
                        </div>

                    </div>
                    <hr class="bg-info">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                        <button type="submit" class="btn btn-success" id="descargar">Descargar</button>

                    </div>
            
                </div>
                </div>
            </div>
            
            </div>
        </form>
        <form class="" method="get" action="/clientes">
             <button type="submit" class="btn btn-danger btn-lg btn-block mt-2 pt-2">Cancelar</button>
        </form>
        
    </div>
    </div>
</div>
<script>
    $("#GenerarCotizacion").click(function(){
        var valor =0;
        var contador = 0;
        var serviinput = "";
        var idinput = "";
        var Cedula_Nit = $("#Cedula_Nit").val();
        $("#modalcednit").text(Cedula_Nit);
        var Nombre = $("#Nombre").val();
        $("#modalnombre").text(Nombre);
        var Telefono = $("#Telefono").val();
        $("#modaltelefono").text(Telefono);
        var Email = $("#Email").val();
        $("#modalemail").text(Email);
        
        for (let i= 1; i <= 9; i++) {
            if ($('#serv'+i).prop('checked') ) {
                
                var ser = $("#serv"+i).val();
                var reg = $("#regioser"+i).val();
                var valorr = $("#valor"+i).val();
                var id = $("#idserv"+i).val();
                serviinput = serviinput+" <input type='hidden' name='serinput"+i+"' value='"+ser+"' id='serinput"+i+"' class='form-control'>";   
                 valor = parseInt(valor)+parseInt($("#valor"+i).val());
                $("#modalservi"+i).text(ser+" "+reg+" "+valorr);
                contador++;
                idinput = idinput+" <input type='hidden' name='idserinput"+contador+"' value='"+id+"' id='idserinput"+contador+"' class='form-control'>";
                
            }else{
                $('#modalservi'+i).remove();   
            }
                   
        }
        $("#servicios").html(serviinput);
        $("#idser").html(idinput);
        $("#modalTotalservi").text("$"+valor);
        $("#valortotal").val("$"+valor);
        $("#contador").val(contador);
});
$("#descargar").click(function(){
    document.getElementById("Formcotiza").submit();
});
                       
</script>
@endsection()
@section("pie")
@endsection()