

<?php $__env->startSection('content_master'); ?>

    <a href="<?php echo e(route('products.index')); ?>" class="btn-success">Kembali</a>

    <div class="relative block p-8 mt-8 overflow-hidden border bg-white border-slate-100 rounded-lg">

        <?php if(session()->has('success')): ?>
            <div class="bg-green-500 text-white font-bold rounded py-2 px-4 mb-4">
                <?php echo e(session()->get('success')); ?>

            </div>
        <?php endif; ?>
    
    
        <?php if($errors->any()): ?>
            <div class="mb-4">
                <div class="bg-red-500 text-white font-bold rounded-t py-2 px-4">
                    Something went wrong...
                </div>
                <ul class="border border-t-0 border-red-400 rounded-b px-4 py-3 text-red-700">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <?php echo e($error); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    
        <form
            action="<?php echo e(route('products.store')); ?>"
            method="POST"
            enctype="multipart/form-data"
        >
            <?php echo csrf_field(); ?>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="name"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Name
                        </label>
                        <input
                        type="text"
                        name="nama"
                        id="nama"
                        placeholder="Nama..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="harga"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Harga
                        </label>
                        <input
                        type="number"
                        name="harga"
                        id="harga"
                        placeholder="Harga..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
                <div class="w-full px-3">
                    <div class="mb-5">
                        <label
                        for="deskripsi"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Deskripsi
                        </label>
                        <textarea name="deskripsi" id="" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md" cols="30" rows="5" placeholder="Deskripsi..."></textarea>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                        for="foto"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                        Foto
                        </label>
                        <input
                        type="file"
                        name="foto"
                        id="foto"
                        accept="image/*"
                        placeholder="Foto..."
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#86efac] focus:shadow-md"
                        />
                    </div>
                </div>
    
                <div class="w-full px-3">
                    <button
                        type="submit"
                        class="hover:shadow-form rounded-md bg-green-400 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    >
                        Create Product
                    </button>
                </div>
    
            </div>
        </form>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\courses\UMPTN\Frameworks\Laravel\tugasupload\resources\views/products/create.blade.php ENDPATH**/ ?>