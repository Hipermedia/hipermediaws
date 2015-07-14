<?php 
/** Bloques de contenido. Estilo PRIMAL
------------------------------------------------------------------- */ 
?>
<!-- PrimalBloques -->
<section class="PrimalBlocks" name="efectivo">
	<!-- Contenedor -->
	<div class="PrimalBlocks-contenido u-contenedor">
		<!-- Títulos de la sección -->
		<h1 class="PrimalBlocks-titulo"><?php the_field('tituloBloques', 'option'); ?></h1>
		<h2 class="PrimalBlocks-subtitulo">
			<?php the_field('subtituloBloques', 'option'); ?>
		</h2>
		<?php $iconos = array ( "fa-users", "fa-eye", "fa-bullhorn", "fa-user-plus"  ); $i = 0; ?>
		<?php if( have_rows('bloquesBloques', 'option') ): ?>
			<?php while( have_rows('bloquesBloques', 'option') ): the_row(); ?>
				
				<!-- bloque -->
				<div class="PrimalBlocks-block">
					<figure class="PrimalBlocks-blockFigure">
						<i class="fa <?php print $iconos[$i]; $i++; ?>"></i>
					</figure>
					<h3 class="PrimalBlocks-blockTitulo"><?php the_sub_field('titulo'); ?></h3>
					<h4 class="PrimalBlocks-blockSubtitulo"><?php the_sub_field('subtitulo'); ?></h4>
					<a href="" class="PrimalBlocks-blockAction btn btn-default btn-raised" data-toggle="modal" data-target="#modal<?php print $i; ?>">
						 <?php the_sub_field('accion'); ?>
					</a>

				</div>

				<!-- Modal -->
				<div class="modal fade" id="modal<?php print $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabelmodal<?php print $i; ?>">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabelmodal<?php print $i; ?>"><?php the_sub_field('accion'); ?></h4>
				      </div>
				      <div class="modal-body">
				        <?php the_sub_field('descripcion'); ?>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
				      </div>
				    </div>
				  </div>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>






