function closeSidebar()
{
alert("x")
}

$(document).ready(function(){
    $("#btnside").click(function(){
      $("#sidebar").toggle();
    });
  });

  
  

    function llenarTabla(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
       }); 
       $.ajax({
        url:"http://192.168.1.6:5000/api/prospectos/index",
        type:'get',
        dataType:"json",
        success:function(data)
        {  
          $("#cuerpo").html("");
            for(var i=0; i<data.length; i++){
            var id_prospecto=data[i]["id"]
              var tr = `<tr>
                <td>`+data[i]["nombre_prospecto"]+`</td>
                <td>`+data[i]["primer_apellido"]+`</td>
                <td>`+data[i]["segundo_apellido"]+`</td>
                <td>`+data[i]["estado"]+`</td>
                 <td>`+`<form action="listaProspecto/${id_prospecto}" method="get"><button  id="btnDetalle" type="submit"  class="btn btn-outline-dark"  value="${id_prospecto}">Detalles</button>
                 <a href="/evaluarProspecto/${id_prospecto}"  id="btnEvaluacion"  class="btn btn-outline-success" >Evaluar</a> </form>`+
                 `</td>
              </tr>`;
              $("#cuerpo").append(tr)
              }

        },
         error:function(x,xs,xt){
        
                 console.log('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
              }
    }); 
    }

      

      function evaluarProspecto(){
        
        $.get('http://192.168.1.6:5000/api/prospectos', function(data){
            $("#cuerpo").html("");
            for(var i=0; i<data.length; i++){
            var id_prospecto=data[i]["id_prospecto"]
              var tr = `<tr>
                <td>`+data[i]["nombre_prospecto"]+`</td>
                <td>`+data[i]["primer_apellido"]+`</td>
                <td>`+data[i]["segundo_apellido"]+`</td>
                 <td>`+`<form action="listaProspecto/${id_prospecto}" method="get"><button  id="btnDetalle" type="submit"  class="btn btn-default"  value="${id_prospecto}">Evaluar</button></form>`+
                 `</td>
              </tr>`;
              $("#cuerpo").append(tr)
            }
          })
         
      }
     
     
      function detalleProspecto(numero){
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    ,
          }
         }); 
          $.ajax({
            url:"http://192.168.1.6:5000/api/prospectos/index/"+numero,
            type:'get',
            dataType:"json",
            success:function(data)
            {  
            var nombre=data["nombre_prospecto"];
            var primer_apellido=data["primer_apellido"];
            var segundo_apellido=data["segundo_apellido"];
            var calle=data["calle"];
            var numeros=data["numero"];
            var colonia=data["colonia"];
            var telefono=data["telefono"];
            var rfc=data["rfc"];
            var cp=data["cp"];
            var observacion=data["observaciones"];
            var ine=`/storage/${data["ine"]}`;
            var comprobante_pago=`/storage/${data["comprobante_pago"]}`;
            var acta_nacimiento=`/storage/${data["acta_nacimiento"]}`;
            $("#nombre_prospecto_x").val(nombre);
            $("#primer_apellido_x").val(primer_apellido);
            $("#segundo_apellido_x").val(segundo_apellido);
            $("#calle_x").val(calle);
            $("#numero_x").val(numeros);
            $("#colonia_x").val(colonia);
            $("#telefono_x").val(telefono);
            $("#rfc_x").val(rfc);
            $("#cp_x").val(cp);
            $("#observaciones_x").val(observacion);
            $("#ine_x").prop("src",ine);
            },
             error:function(x,xs,xt){
            
                     console.log('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                  }
        }); 
       
       
      }
    
     
  
      $('#btnguardar').click( function (e) {
        var parametros=new FormData($("#formulario")[0]);
        e.preventDefault();
       var nombre= $("#nombre_prospecto").val();
       var primer= $("#primer_apellido").val();
       var segundo= $("#segundo_apellid").val();
       var calle= $("#calle").val();
      var numero=  $("#numero").val();
       var colonia= $("#colonia").val();
      var telefono=  $("#telefono").val();
      var rfc=  $("#rfc").val();
      var cp=  $("#cp").val();
      var ine=  $("#ine").val();
      var comp=  $("#comprobante_pago").val();
      var acta =  $("#acta_nacimiento").val();
      if( nombre=="" || primer=="" || segundo==""|| calle=="" || numero==""|| colonia==""|| telefono==""||rfc=="" || cp=="" )
      {
        Swal.fire('Atencion','No se permiten campos vacios,verifica los campos nuevamente','info');
      }else{
              $.ajax({
                url:"http://192.168.1.6:5000/api/prospectos/create",
                data:parametros,
                contentType:false,
                processData:false,
                type:'post',
                success: function (response) {
                    alert(JSON.stringify(response))
                    Swal.fire('Registro Exitoso','Se ha registrado al prospecto con exito','success');
                    $("#x").modal('hide');//ocultamos el modal
                    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
    
                   
                },
                statusCode: {
                   404: function() {
                      alert('web not found');
                   }
                },
                error:function(x,xs,xt){
                  
                    Swal.fire('Ocurrio un error',JSON.stringify(x) + "bien" + JSON.stringify(xs) ,'error')
      
                }
                
      })
      }
               });

               $('#btncerrar').click( function (e) {
                Swal.fire({
  title: 'Esta seguro que desea salir?',
  text: "No se guardaran los cambios!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Cancelar',
  confirmButtonText: 'Salir'
}).then((result) => {
  if (result.isConfirmed) {
    $("#x").modal('hide');//ocultamos el modal
                $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                $('.modal-backdrop').remove();//eliminamos el backdrop del modal
  }
})
             

                
               });

 
     
  $("#login").click( function (e) {
  var email=$("#email").val();
  var password=$("#password").val();
  $.ajaxSetup({
    headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') ,
    }
   }); 
   var cadena='email='+email+'&password='+password;
  $.ajax({
    url:"http://192.168.1.6:5000/api/login",
    type:'post',
    cache:true,
    data:cadena,
                success: function (response) {
                  window.location.replace('/listaProspecto')

                },
                statusCode: {
                   404: function() {
                      alert('web not found');
                   }
                },
                error:function(x,xs,xt){
                  
                    Swal.fire('Ocurrio un error',"Credenciales Invalidas",'error')
                   
    
      
                }
      })
            
    });

    
  
   function updateEvaluar() {
      var url=window.location.href;
   var id=url.substring(url.lastIndexOf('/') + 1);
   var observacion=$("#observacion").val();
   var estado=$("#estatus").val();
   $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') ,
        
     }
    }); 

    if(observacion=="" && estado==3 )
    {
     Swal.fire('Atencion','El campo observaciones esta vacio', 'info');
    
   
    
    }else if(estado==1){
     Swal.fire('Atencion','No ha seleccionado un estado para este prospecto','info')
   }else{
 
   $.ajax({
     url:"http://192.168.1.6:5000/api/prospectos/update/"+id,
     type:'put',
     cache:true,
     data:{"observaciones":observacion,"estatus":estado},
                 success: function (response) {
 
                     
                   Swal.fire({
                     title: 'Evaluacion Exitosa',
                     text:'El prospecto ha sido evaluado con exito',
                     icon: 'success',
                     confirmButtonColor: '#3085d6',
                   }).then((result) => {
                     if (result.isConfirmed) {
                       window.location.href="/listaProspecto";
                     }
                   })
                  
                   
                
                 
 
                 },
                 statusCode: {
                    404: function() {
                       alert('web not found');
                    }
                 },
                 error:function(x,xs,xt){
                   
                     Swal.fire('Ocurrio un error',"No se ha podido evaluar al prospecto",'error')
                    
                   }
                 })
               }
               }
 
                  
   
     
    $('#btnPromotor').click( function (e) {
      var nombre=$("#nombre_promotor_r").val();
      var apellidop=$("#primer_apellido_r").val();
      var apellidom=$("#segundo_apellido_r").val();
      var email=$("#email_r").val();
      var password=$("#password_r").val();
      var password_2=$("#confirmar_password_r").val();
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') ,
           
        }
       }); 
      if(nombre=="" || apellidop=="" || apellidom=="" || email=="" || password=="" || password_2==""){
        Swal.fire('Atencion','No se permiten campos vacios,verifiquelos nuevamente','info');
      }
      else{
    

  
      if(password==password_2){
      $.ajax({
        url:"http://192.168.1.6:5000/api/promotores/create",
        type:'post',
        cache:true,
        data:{"nombre_promotor":nombre,"primer_apellido":apellidop,"segundo_apellido":apellidom,"email":email,"password":password},
                    success: function (response) {
                    
                     Swal.fire({
                      title: 'Registro Exitoso',
                      text:'Se ha registrado al promotor con exito',
                      icon: 'success',
                      confirmButtonColor: '#3085d6',
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href="/login";
                      }
                    })
                   
                    
    
                    },
                    statusCode: {
                       404: function() {
                          alert('web not found');
                       }
                    },
                    error:function(x,xs,xt){
                      
                        Swal.fire('Ocurrio un error',"No se ha podido registrar al promotor,intente de nuevo",'error')
                       
        
          
                    }
                  
          })
          }else{
            Swal.fire('Ocurrio un error',"Las contraseñas no coinciden",'error')
          }
          }
        
                
    })


    var Loading = (loadingDelayHidden = 0) => {

      //-----------------------------------------------------
      // Variables
      //-----------------------------------------------------
      // HTML
      let loading = null;
      // Retardo para borrar
      const myLoadingDelayHidden = loadingDelayHidden;
      // Imágenes
      let imgs = [];
      let lenImgs = 0;
      let counterImgsLoading = 0;
  
      //-----------------------------------------------------
      // Funciones
      //-----------------------------------------------------
  
      /**
       * Método que aumenta el contador de las imágenes cargadas
       */
      function incrementCounterImgs() {
          counterImgsLoading += 1;
          // Comprueba si todas las imágenes están cargadas
          if (counterImgsLoading === lenImgs) hideLoading();
      }
  
      /**
       * Ocultar HTML
       */
      function hideLoading() {
          // Comprueba que exista el HTML
          if(loading !== null) {
              // Oculta el HTML de "cargando..." quitando la clase .show
              loading.classList.remove('show');
  
              // Borra el HTML
              setTimeout(function () {
                  loading.remove();
              }, myLoadingDelayHidden);
          }
  
      }
  
      /**
       * Método que inicia la lógica
       */
      function init() {
          /* Comprobar que el HTML esté cargadas */
          document.addEventListener('DOMContentLoaded', function () {
              loading = document.querySelector('.loading');
              imgs = Array.from(document.images);
              lenImgs = imgs.length;
  
              /* Comprobar que todas las imágenes estén cargadas */
              if(imgs.length === 0) {
                  // No hay ninguna
                  hideLoading();
              } else {
                  // Una o más
                  imgs.forEach(function (img) {
                      // A cada una le añade un evento que cuando se carge la imagen llame a la funcion incrementCounterImgs
                      img.addEventListener('load', incrementCounterImgs, false);
                  });
              }
          });
      }
  
      return {
          'init': init
      }
  }
  
  // Para usarlo se declara e inicia. El número es el tiempo transcurrido para borra el HTML una vez cargado todos los elementos, en este caso 1 segundo: 1000 milisegundos,
  Loading(1000).init();

  function getEstado(selectObject) {
    var value = selectObject.value;  
 if(value==3){
  $('#observacion').attr('disabled', false);
 }
  }
