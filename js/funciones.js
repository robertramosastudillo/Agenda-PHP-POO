

function agregardatos(identificacion,nombres,apellidos,email,celular){

    cadena="identificacion=" + identificacion +
           "&nombres=" + nombres + 
           "&apellidos=" + apellidos +
           "&email=" + email +
           "&celular=" + celular;

    $.ajax({
        type:"POST",
        url:"php/agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Agregado con exito :D");
            }else{
                alertify.error("Fallo el servidor :(");   
            }
        }
    });
}

function agregaform(datos){

    d=datos.split('||');

    $('#idpersona').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombresu').val(d[2]);
    $('#apellidosu').val(d[3]);
    $('#emailu').val(d[4]);
    $('#celularu').val(d[5]);

}

function actualizaDatos(){

    id=$('#idpersona').val();
    identificacion=$('#identificacionu').val();
    nombres=$('#nombresu').val();
    apellidos=$('#apellidosu').val();
    email=$('#emailu').val();
    celular=$('#celularu').val();

    cadena="id=" + id +
    "&identificacion=" + identificacion +
    "&nombres=" + nombres + 
    "&apellidos=" + apellidos +
    "&email=" + email +
    "&celular=" + celular;

    $.ajax({
        type:"POST",
        url:"php/actualizaDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Actualizado con exito :D");
            }else{
                alertify.error("Fallo el servidor :(");   
            }
        }
    });

    }

    function preguntarSiNo(id){
        alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
                     function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
    }

    function eliminarDatos(id){
        cadena="id="+ id;

        $.ajax({

            type:"POST",
            url:"php/eliminarDatos.php",
            data:cadena,
            success:function(r){
                if(r==1){
                    $('#tabla').load('componentes/tabla.php');
                    alertify.success("Eliminado con exito");
                }else{
                    alertify.error("Fallo el servidor");
                }
            }
        })
    }
    
    
