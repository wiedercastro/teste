<?php $__env->startSection('cabecalho'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
<span id="">Veiculos</span>
<span class="d-flex">
<form>
 <input type="text" name="search" placeholder="Filtar:">
 <button type="submit" class="btn btn-primary bt-sm mr-3" style="margin-rigth:5px;">Filtrar</button>
</form>

<?php if(auth()->guard()->check()): ?>
<a href="/teste/criar"><button class="btn btn-primary d-flex">Cadastro</button></a>
<?php endif; ?>

</span>

</li>

</ul>

		<?php if(!empty($mensagem)): ?>
				<div class="alert alert-success">
					<?php echo e($mensagem); ?>

				</div>
		<?php endif; ?>
				<table class="table table-success table-striped">
				<thead>
				<tr>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Versão</th>
					<th scope="col">Dica</th>
				</tr>
				</thead>
				<tbody>
				<?php $__currentLoopData = $veiculo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td class="">
						<?php echo e($veiculos->marca); ?>

						</td>
						<td class="">
						<?php echo e($veiculos->modelo); ?>

						</td>
						<td class="">
						<?php echo e($veiculos->versao); ?>

						</td>
						<td class="">
						<?php echo e($veiculos->dica); ?>

						</td>
					</tr>	
						<!--
						<span class="d-flex">
							<a href="/teste/<?php echo e($veiculos->id); ?>" class="btn btn-info btn-sm">
								<i class="fas fa-external-link-alt">Detalhar</i>
							</a>
						</span>	-->
						
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</tbody>
				</table>

				<?php $__env->stopSection(); ?>
	<!-- /.login-box -->
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wieder/wieder/resources/views/cadastro/index.blade.php ENDPATH**/ ?>