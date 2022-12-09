

<?php $__env->startSection('content_master'); ?>
    <h1 class="text-2xl font-bold text-slate-700 mb-4">List Product</h1>

    <a href="<?php echo e(route('products.create')); ?>" class="w-full h-full rounded-full text-slate-600 font-semibold hover:text-green-300 transition duration-150 ease-in-out">Tambah Product</a>

    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="max-w-md rounded bg-white shadow-xl py-10 px-4 text-gray-800 relative md:text-left">
            <div class="md:flex flex-col">
                <div class="w-full px-10 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="<?php echo e($product->foto_url); ?>" class="w-full relative z-10" alt="">
                        <div class="border-4 border-yellow-200 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                    </div>
                </div>
                <div class="flex flex-wrap w-full px-10">
                    <div class="self-start mb-10">
                        <h1 class="font-bold uppercase text-2xl my-5"><?php echo e($product->nama); ?></h1>
                        <p class="text-md font-semibold">
                            <?php echo e($product->description ? $product->description : 'No description'); ?> <br>
                            <a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900">READ MORE <i class="mdi mdi-arrow-right"></i></a>
                        </p>
                    </div>
                    <div>
                        <div class="flex items-center align-bottom mr-5">
                            <span class="text-2xl leading-none align-baseline">$</span>
                            <span class="font-bold text-5xl leading-none align-baseline"><?php echo e($product->harga); ?></span>
                            <span class="text-2xl leading-none align-baseline">.99</span>
                        </div>
                        <div class="flex items-center align-bottom mt-4 gap-3">
                            <a href="<?php echo e(route('products.destroy', $product->id)); ?>" class="bg-red-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> Delete</a>
                            <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1 class="text-4xl mt-6 text-slate-500">Product Sedang Kosong</h1>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\courses\UMPTN\Frameworks\Laravel\tugasupload\resources\views/products/index.blade.php ENDPATH**/ ?>