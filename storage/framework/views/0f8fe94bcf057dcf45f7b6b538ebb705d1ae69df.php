<nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                <?php if(auth()->user()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-dark d-flex align-items-center me-2 active" aria-current="page"
                            href="<?php echo e(route('dashboard')); ?>">
                            <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark me-2" href="<?php echo e(route('profile')); ?>">
                            <i class="fa fa-user opacity-6 text-dark me-1"></i>
                            Profile
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link text-dark me-2" href="<?php echo e(auth()->user() ? route('static-sign-up') : route('sign-up')); ?>">
                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                        Sign Up
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark me-2" href="<?php echo e(auth()->user() ? route('sign-in') : route('login')); ?>">
                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                        Sign In
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/html/klaus/mvp-green/resources/views/layouts/navbars/guest/sign-up.blade.php ENDPATH**/ ?>