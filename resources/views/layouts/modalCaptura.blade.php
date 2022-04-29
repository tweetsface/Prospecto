<div class="modal fade bd-example-modal-lg" id="x" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Prospecto</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="formulario"   name="formulario" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre_prospecto">Nombre Prospecto</label>
      <input type="text" class="form-control" id="nombre_prospecto" name="nombre_prospecto" placeholder="Nombre del Prospecto" required>
    </div>
    <div class="form-group col-md-6">
      <label for="primer_Apellido">Primer Apellido</label>
      <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Primer Apellido">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="segundo_Apellido">Segundo Apellido</label>
      <input type="text" class="form-control"  id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido" required>
    </div>
    <div class="form-group col-md-6">
      <label for="calle">Calle</label>
      <input type="text" class="form-control" id="calle" name="calle"placeholder="Calle" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group form-group col-md-2">
    <label for="numero">Numero</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero int." required>
  </div>
  <div class="form-group col-md-6">
    <label for="colonia">Colonia</label>
    <input type="text" class="form-control" id="colonia" name="colonia"placeholder="Colonia" required>
  </div>
  <div class="form-group col-md-4">
      <label for="cp">Codigo Postal</label>
      <input type="text" class="form-control" id="cp" name="cp" required>
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="telefono">Telefono</label>
      <input type="text" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="form-group col-md-6">
      <label for="rfc">RFC</label>
      <input type="text" class="form-control" id="rfc" name="rfc" required>
    </div>
   

<div class="col-md-12">
<div id="accordion"  id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-default" id="btncolapsar" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Documentos
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      
        <div class="form-row">
           <div class="form-group col-md-6">
      <label for="comprobante_pago">COMPROBANTE DE PAGO</label>
      <input type="file" class="form-control-file" id="comprobante_pago"  name="comprobante_pago" required>
    </div>
    <div class="form-group col-md-6">
      <label for="ine">INE</label>
      <input type="file" class="form-control-file" id="ine" name="ine" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="acta">Acta de nacimiento</label>
      <input type="file" class="form-control-file" id="acta_nacimiento" name="acta_nacimiento" required>
    </div>
</div>
      </div>
    </div>
  </div>
</div>
   
   </div>
      </div>
      <div class="modal-footer">
        <button id="btncerrar" type="button" class="btn btn-secondary">Cerrar</button>
        <button id="btnguardar" type="button" class="btn btn-primary">Guardar Datos</button>
      </div>
</form>
    </div>
  </div>
</div>
</div>
