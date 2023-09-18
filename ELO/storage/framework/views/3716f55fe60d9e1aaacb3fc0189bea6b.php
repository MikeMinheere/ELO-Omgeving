<?php $__env->startSection('content'); ?>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Welcome to the Online Learning Platform</h1>
                    <p>Empower your learning experience with interactive assignments and language modules.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Get Started Today</h2>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Sign Up</a>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ELO-Omgeving\ELO\resources\views/welcome.blade.php ENDPATH**/ ?>