
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    
                </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript">
            $(".link_ver_detalles").click(function(e){
                $.get( $(this).data("url"),function(data){
                    var proyecto = data["proyecto"];
                    $("#nom_proyecto").html("<b>"+proyecto.NombreProyecto+"<b>");
                    $("#fuente_fondo").html("<b>"+proyecto.FuenteFondos+"<b>");
                    $("#monto_plan").html("<b>$"+numberWithCommas(proyecto.MontoPlanificado)+"<b>");
                    $("#monto_patro").html("<b>$"+numberWithCommas(proyecto.MontoPatrocinado)+"<b>");
                    $("#monto_propio").html("<b>$"+numberWithCommas(proyecto.MontoFondosPropios)+"<b>");
                }).done(function(){
                    //
                }).fail(function(){
                    alert( "Hubo un problema interno" );
                }).always(function(){
                    //
                });
            });

            $('#verDetalles').on('hidden.bs.modal', function (event) {
                // do something...
                $("#nom_proyecto").html("<b><b>");
                $("#fuente_fondo").html("<b><b>");
                $("#monto_plan").html("<b><b>");
                $("#monto_patro").html("<b><b>");
                $("#monto_propio").html("<b><b>");
            })

            $("#btn_actualizar").click(function(e){
                //$("#btn_actualizar").parent().find("form").attr("action")
                $.post($("#"+$(this).attr("form")).attr("action"),{
                    "_token": "{{ csrf_token() }}",
                    "id": $("#id").val(),
                    "nombre_proyecto" : $("#nombre_proyecto").val(),
                    "fuente_fondos" : $("#fuente_fondo").val(),
                    "monto_planificado" : $("#monto_planificado").val(),
                    "monto_patrocinado" : $("#monto_patrocinado").val(),
                    "monto_fondos_propios" : $("#monto_propio").val()
                }).done(function(data){
                    //console.log(data);
                    if(data){
                        Swal.fire({
                            title:'Éxito!',
                            text:'Se ha actualizado el registro correctamente',
                            icon:'success',
                            confirmButtonText:'Aceptar'
                        }).then((result) => {
                            if (result.isConfirmed) { //isConfirmed, isDenied, isDismissed
                                window.location.href="../listar-actualizar";
                            }
                        })
                    }else{
                        alert("No se pudo actualizar el registro");
                    }
                }).fail(function(){
                    alert( "Hubo un error interno" );
                }).always(function(){
                    //
                });
            });


            $("#btn_guardar").click(function(e){
                //$("#btn_actualizar").parent().find("form").attr("action")
                $.post($("#"+$(this).attr("form")).attr("action"),{
                    "_token": "{{ csrf_token() }}",
                    "nombre_proyecto" : $("#nombre_proyecto").val(),
                    "fuente_fondos" : $("#fuente_fondo").val(),
                    "monto_planificado" : $("#monto_planificado").val(),
                    "monto_patrocinado" : $("#monto_patrocinado").val(),
                    "monto_fondos_propios" : $("#monto_propio").val()
                }).done(function(data){
                    //console.log(data);
                    if(data){
                        Swal.fire({
                            title:'Éxito!',
                            text:'Se ha creado un nuevo registro correctamente',
                            icon:'success',
                            confirmButtonText:'Aceptar'
                        }).then((result) => {
                            if (result.isConfirmed) { //isConfirmed, isDenied, isDismissed
                                window.location.href="./inicio";
                            }
                        });
                    }else{
                        alert("No se pudo crear el registro");
                    }
                }).fail(function(){
                    alert( "Hubo un error interno" );
                }).always(function(){
                    //
                });
            });


            $(".eliminar-registro").click(function(e){
                var direccion = $(this).data("url");
                e.preventDefault();
                Swal.fire({
                    title:'¿Está seguro(a)?',
                    text:'¿Está seguro(a) de eliminar el registro?',
                    icon:'question',
                    confirmButtonText:'Si, estoy seguro(a)',
                    showCancelButton: true,
                    cancelButtonText: 'Prefiero no hacerlo'
                }).then((result) => {
                    if (result.isConfirmed) { //isConfirmed, isDenied, isDismissed
                        $.get(direccion,function(){
                            //
                        }).done(function(data){
                            //
                            if(data){
                                Swal.fire({
                                    title:'Éxito!',
                                    text:'Se ha eliminado el registro correctamente',
                                    icon:'success',
                                    confirmButtonText:'Aceptar',
                                }).then((result) => {
                                    if (result.isConfirmed) { //isConfirmed, isDenied, isDismissed
                                        window.location.href="./listar-eliminar";
                                    }
                                });
                            }else{
                                alert("No se pudo eliminar el registro");
                            }
                        }).fail(function(){
                            alert( "Hubo un problema interno" );
                        }).always(function(){
                            //
                        });
                    }
                });
            });

            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        </script>
    </body>
</html>
