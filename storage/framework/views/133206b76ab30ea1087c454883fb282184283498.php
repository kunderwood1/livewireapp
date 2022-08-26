<div>
    <div>
        <input wire:model="search" type="text" placeholder="Search cities..." />
        <table class="table table-striped table-hover">
            <tr>
                <th>
                    <a href="#" wire:click="doSort('state', 'asc')"> &uarr; </a>
                    State
                    <a href="#" wire:click="doSort('state', 'desc')"> &darr; </a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('name', 'asc')"> &uarr; </a>
                    City
                    <a href="#" wire:click="doSort('name', 'desc')"> &darr; </a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('population_2010', 'asc')"> &uarr; </a>
                    2010 Population
                    <a href="#" wire:click="doSort('population_2010', 'desc')"> &darr; </a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('population_rank', 'asc')"> &uarr; </a>
                    Population Rank
                    <a href="#" wire:click="doSort('population_rank', 'desc')"> &darr; </a>
                </th>
            </tr>
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($city->state); ?></td>
                <td><?php echo e($city->name); ?></td>
                <td><?php echo e($city->population_2010); ?></td>
                <td><?php echo e($city->population_rank); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php /**PATH C:\Users\guruk\OneDrive\Desktop\CSCD378\CityNameDbApp\resources\views/livewire/cities.blade.php ENDPATH**/ ?>