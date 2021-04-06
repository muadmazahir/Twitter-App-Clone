<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        <?php $__empty_1 = true; $__currentLoopData = current_user()->follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="<?php echo e($loop->last ? '' : 'mb-4'); ?>">
                <div>
                    <a href="<?php echo e($user->path()); ?>" class="flex items-center text-sm">
                        <img
                            src="<?php echo e($user->avatar); ?>"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >

                        <?php echo e($user->name); ?>

                    </a>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No friends yet!</li>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/Tweety-master/resources/views/_friends-list.blade.php ENDPATH**/ ?>