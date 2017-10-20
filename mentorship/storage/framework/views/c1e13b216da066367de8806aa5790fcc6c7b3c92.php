
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">

		<div class="col-md-3">



			<br>
			<br>

			<div style="">
				<img src="../img/user.png" class="img img-rounded" style="position:relative;left:20px;" width="200" height="180"><br><br>
				<div class="list-group">
					<ul class="list-group">
						<li class="list-group-item"><strong>Email</strong><span class="pull-right"><?php echo e($details ->email); ?></span>
						</li>
						<?php if($details->roll !=''): ?>
						<li class="list-group-item"><strong>Roll Number </strong><span class="pull-right"><?php echo e($details ->roll); ?></span>
						</li>
						<?php endif; ?>
						<?php if($details->phone !=''): ?>
						<li class="list-group-item"><strong>Phone Number </strong><span class="pull-right"><?php echo e($details ->phone); ?></span>
						</li>
						<?php endif; ?>
						<?php if($details->pout !=''): ?>
						<li class="list-group-item"><strong>Year of Graduation</strong><span class="pull-right"><?php echo e($details ->pout); ?></span>
						</li>
						<?php endif; ?>
						<li class="list-group-item"><strong>Department  </strong><span class="pull-right"><?php echo e($details ->department); ?></span>
						</li>
						<?php if($details->hall!=''): ?>
						<li class="list-group-item"><strong>Hall </strong><span class="pull-right"><?php echo e($details->hall); ?></span></li>
						<?php endif; ?>
					</ul>		
				</div>
			</div>
		</div><!--col-md-3 ends -->

		<div class="col-md-6">
			<br>

			<div style="margin:30px 0px 5px 0px" class="well">
				<h3>
					Welcome to the Student-Alumni Mentorship Programme!
				</h3>


				<h4>
					Thank you for registering! We will allot a <?php echo e((auth()->user()->type=='mentor') ? 'mentee' : 'mentor'); ?> to you soon.
				</h4>
			</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('profile.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>