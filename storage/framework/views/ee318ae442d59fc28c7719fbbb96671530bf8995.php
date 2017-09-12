<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-tasks page-title-icon"></i>
                    <h2>Services /</h2>
                    <p>Here are the services we offer</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Full Width Text -->
    <div class="portfolio container">
        <div class="portfolio-title">
            <h3>Services We Offer</h3>
        </div>
        <div class="row">
            <?php $__currentLoopData = $wwd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ww): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="work span3">
                    <a href="http://<?php echo e($ww->link); ?>"><img src="<?php echo e(asset('images/wwd/'. $ww->img)); ?>" width="1000" height="460"></a>
                    <h4><?php echo e($ww->title); ?></h4>
                    <p><?php echo e($ww->caption); ?></p>
                    <div class="icon-awesome">
                        <a href="<?php echo e(asset('images/wwd/'. $ww->img)); ?>" rel="prettyPhoto"><i class="icon-search"></i></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>