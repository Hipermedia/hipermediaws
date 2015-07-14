<?php 
/** Botones para compartir en redes sociales. Estilo ANLI
------------------------------------------------------------------- */ 
?>


<section class="PrimalCover u-contenedorCompleto" style="background-image: url('<?php the_field('imagenFondoPortada', 'option'); ?>')">
	
	<div class="PrimalCover-contenido u-contenedor">
		
		<!-- Títulos y llamadas a la acción -->
		<div class="PrimalCover-titulos">
			<h1 class="PrimalCover-titulo"><?php the_field('tituloPortada', 'option'); ?></h1>		
			<h2 class="PrimalCover-subtitulo"><?php the_field('subtituloPortada', 'option'); ?></h2>
			<a data-toggle="modal" data-target="#myModal" href="#" class="PrimalCover-action btn btn-default btn-raised"><?php the_field('accion1Portada', 'option'); ?></a>
			<a href="#efectivo" class="PrimalCover-action btn btn-default btn-raised"><?php the_field('accion2Portada', 'option'); ?></a>
		</div>
		
		<!-- Imagen principal -->
		<figure class="PrimalCover-imagen">
			<img src="<?php the_field('imagenPortada', 'option'); ?>" alt="Sitio web efectivo SH">
		</figure>

	</div>		
	
	<section>
	    <div class="custom-modal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	      <div class="modal-dialog modal-sm" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="myModalLabel">¡Solicita Informes!</h4>
	          </div>
	          <div class="modal-body">
	           <div class="formulario">
	           	<?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?>
	           </div>
	          </div>
	        </div>
	      </div>
	    </div>
	</section>

</section>