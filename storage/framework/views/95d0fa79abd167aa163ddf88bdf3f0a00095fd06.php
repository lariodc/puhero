	<?php $__env->startSection('title', 'Providers'); ?>

		<?php $__env->startSection('content'); ?>


			<div class="row">
				<?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-sm">
				   		<div class="card text-center" style="width: 18rem;margin-top: 100px">
  						<img style="height: 200px;width: 200px;background-color:#eaefa0;    margin: 20px;"class="card-img-top rounded-circle mx-auto d-block" src="images/<?php echo e($provider->logo); ?>" alt="">
  							<div class="card-body">
   					 			<h5 class="card-title"><?php echo e($provider->name); ?></h5>
   								 <p class="card-text">Este operador tiene los siguientes paquetes disponibles </p>
   					 			<a href="/providers/<?php echo e($provider->slug); ?>" class="btn btn-primary">Ir a la oferta</a>
  							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>