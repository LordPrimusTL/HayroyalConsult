<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-1.10.2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/request.js')); ?>"></script>

</html>