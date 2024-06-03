<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .container {
            text-align: center;
            padding-top: 50px;
        }
        label {
            display: inline-block;
            width: 200px;
        }
        input, select {
            color: black;
            width: 200px;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid page-body-wrapper">
        <div class="container">
            <form action="<?php echo e(url('/upload_doctor')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div style="padding-top: 15px;">
                    <label>Name</label>
                    <input type="text" name="name" style="color:black;"  placeholder="Enter a name" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>Phone</label>
                    <input style="color:black;" type="number" name="phone" placeholder="Phone number" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>Speciality</label>
                    <select style="color:black;" name="spealicity" required>
                        <option  value="">Select</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>
                    </select>
                </div>

                <div style="padding-top: 15px;">
                    <label>Room No</label>
                    <input style="color:black;" type="text" name="room" placeholder="Enter room number" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>Image</label>
                    <input  type="file" name="file" required="">
                </div>

                <div style="padding-top: 15px;">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\ertug\Desktop\2110213017_1\hospital_management\resources\views/admin/add_doctor.blade.php ENDPATH**/ ?>