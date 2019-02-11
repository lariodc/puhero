	<?php $__env->startSection('title', 'Providers'); ?>

		<?php $__env->startSection('content'); ?>

<img style="height: 200px;width: 200px;background-color:#eaefa0;    margin: 20px;"class="card-img-top rounded-circle mx-auto d-block" src="/images/<?php echo e($provider->logo); ?>" alt="">
<div class="text-center">
	<h5 class="card-title"> <?php echo e($provider->name); ?> </h5>
	
	<p class="card-text">
		Triple digital plus: $117900
	</p>
	<p class="card-text">
		Triple digital basico: $9900
	</p>


<a href="/providers/<?php echo e($provider->slug); ?>/edit" class="btn btn-primary">Editar</a>


</div>
			
		<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>