	<?php $__env->startSection('title', 'Providers Create'); ?>

		<?php $__env->startSection('content'); ?>
			<form class="form-group" method="POST" action="/providers" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label for=""> Nombre </label>
					<input type="text" name="name" class=" form-control">
				</div>

				<div class="form-group">
					<label for=""> Logos </label>
					<input type="file" name="logo">
				</div>

					<button type="submit" class="btn btn-primary"> Guardar </button>
			</form>
		<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>