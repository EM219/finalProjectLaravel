<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3">
        <img src="<?php echo e($user->profile->ProfileImage()); ?>"  class="rounded-circle  w-100"/>
        </div>
       

        <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
          

               <div class="d-flex  align-items-center pb-3">
               <div class="h3"><?php echo e(Auth::user()->username); ?></div>

               <folbutton user-id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"></folbutton>
             

               </div>


           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                    <a href="/p/create">Add New Post</a>
                <?php endif; ?>
          
           </div>
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                <a href="/profile/<?php echo e($user->id); ?>/edit">Edit Profile</a>
            <?php endif; ?>
           <div class="d-flex">
           <div class="pr-4"><strong><?php echo e($user->posts->count()); ?> </strong> Posts</div>
           <div class="pr-5"><strong><?php echo e($followersCount); ?></strong> followers</div>
           <div class="pr-5"><strong><?php echo e($followingCount); ?></strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">  <?php echo e($user->profile->title); ?> </div>
           <div class="pt-4"><?php echo e($user->profile->description); ?></div>

           <div class="pt-4"><a href="#"><?php echo e($user->profile->url); ?></a></div>
        </div>
</div>


<div class="row pt-5">
    
<?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-4 pb-4">
         <a href="/p/<?php echo e($post->id); ?>"><img src="/storage/<?php echo e($post->image); ?>" class="w-100"  style="width: 400px; height: 400px;"></a>


       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
</div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp db\htdocs\finalProject\resources\views/profiles/index.blade.php ENDPATH**/ ?>