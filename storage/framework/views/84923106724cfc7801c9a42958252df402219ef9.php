<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="<?php echo e(route('dashboard')); ?>">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
            <span class="ms-3 font-weight-bold">Green Sustain Ability</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'dashboard' ? 'active' : ''); ?>"
                    href="<?php echo e(route('dashboard')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-tachometer ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['dashboard']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages</h6>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'incident-management' ? 'active' : ''); ?>"
                    href="<?php echo e(route('incident-management')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-exclamation-circle ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['incident-management']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Incident Management</span>
                </a>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'indicator-monitoring' ? 'active' : ''); ?>"
                    href="<?php echo e(route('indicator-monitoring')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-bar-chart  ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['indicator-monitoring']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Indicator Monitoring</span>
                </a>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'audit-management' ? 'active' : ''); ?>"
                    href="<?php echo e(route('audit-management')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-book ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['audit-management']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Audit Management</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'data-management' ? 'active' : ''); ?>"
                    href="<?php echo e(route('data-management')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-database ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['data-management']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Management</span>
                </a>
            </li>

            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'carbon-footprint' ? 'active' : ''); ?>"
                    href="<?php echo e(route('carbon-footprint')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-leaf  ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['carbon-footprint']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">Carbon Footprint</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">User(s) admin</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'user-profile' ? 'active' : ''); ?>"
                    href="<?php echo e(route('user-profile')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-user  ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['user-profile']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link <?php echo e(Route::currentRouteName() == 'user-management' ? 'active' : ''); ?>"
                    href="<?php echo e(route('user-management')); ?>">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fa fa-users fa-list-ul ps-2 pe-2 text-center
                        <?php echo e(in_array(request()->route()->getName(),['user-management']) ? 'text-white' : 'text-dark'); ?>"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<?php /**PATH /var/www/html/klaus/mvp-green/resources/views/layouts/navbars/auth/sidebar.blade.php ENDPATH**/ ?>