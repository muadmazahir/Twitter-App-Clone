<div class="flex p-4 <?php echo e($loop->last ? '' : 'border-b border-b-gray-400'); ?>">
    <div class="mr-2 flex-shrink-0">
        <a href="<?php echo e($tweet->user->path()); ?>">
            <img
                src="<?php echo e($tweet->user->avatar); ?>"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="<?php echo e($tweet->user->path()); ?>">
                <?php echo e($tweet->user->name); ?>

            </a>
        </h5>

        <p class="text-sm mb-3">
            <?php echo e($tweet->body); ?>

        </p>

        <?php if(auth()->guard()->check()): ?>
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.like-buttons','data' => ['tweet' => $tweet]]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tweet' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweet)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/Tweety-master/resources/views/_tweet.blade.php ENDPATH**/ ?>