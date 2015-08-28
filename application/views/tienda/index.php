<link rel="stylesheet" href="<?=base_url()?>plantilla/css/owlTienda.css" />
<div class="polos">
	  <div class="item"> <img onclick="cambiarPolos(1);" data-toggle="modal" data-target="#myModal" id="id1" src="<?=base_url();?>plantilla/imagen/tienda/polos/1.png" alt="" title="Haz Click para ver detalles"> </div>
	  <div class="item" id="medio"> <img onclick="cambiarPolos(2);" data-toggle="modal" data-target="#myModal" id="id2" src="<?=base_url();?>plantilla/imagen/tienda/polos/2.png" alt="" alt="" title="Haz Click para ver detalles"> </div>
	  <div class="item"> <img id="id3" onclick="cambiarPolos(3);" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/polos/3.png" alt="" alt="" title="Haz Click para ver detalles"> </div>
</div>
<div class="cuadros">
	<div class="subcuadro">
   <img onclick="cambiarProductos(audifonos);" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales">
  </div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
	<div class="subcuadro"><img onclick="cambiarProductos('audifonos');" data-toggle="modal" data-target="#myModal" src="<?=base_url();?>plantilla/imagen/tienda/productos/audifonos.jpg" alt="" title="HyperX - Audifonos Profesionales"></div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        <h4 class="modal-title">Tienda AGS</h4>
      </div>
      <div class="modal-body">
        <img data-toggle="modal" data-target="#myModal" id="poloModal" src="<?=base_url();?>plantilla/imagen/tienda/polos/1.png" alt="">
        <br/>
        <div class="colores">
          <div class="rojo"></div>
          <div class="amarillo"></div>
          <div class="verde"></div>
        </div>
        <div class="texto">
        	<h3>Nombre</h3>
        	<p>Esta es una pequeña descripción de lo que representa el producto</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
<script src="<?=base_url()?>plantilla/js/ejecutorTienda.js"></script>