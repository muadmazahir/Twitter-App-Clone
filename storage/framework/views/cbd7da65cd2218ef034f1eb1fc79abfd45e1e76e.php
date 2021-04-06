<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="<?php echo e(route('home')); ?>"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Explore
        </a>
    </li>

    <?php if(auth()->guard()->check()): ?>
        <li>
            <a
                class="font-bold text-lg mb-4 block"
                href="<?php echo e(current_user()->path()); ?>"
            >
                Profile
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                <?php echo csrf_field(); ?>

                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    <?php endif; ?>
</ul>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Laravel/Tweety-master/resources/views/_sidebar-links.blade.php ENDPATH**/ ?>