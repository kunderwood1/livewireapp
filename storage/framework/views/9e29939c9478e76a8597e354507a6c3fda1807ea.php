<!DOCTYPE html>


<style>

    .center {
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        width: 1000px
    }
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        
        
    }



</style>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
        <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    </head>

    <body>
        <div>
            <div class="hero bg-dark" >
                <div class="hero-body">
                    <h1 style="margin-left:20px;">Cities</h1>
                    
                </div>
            </div>
            <div>
                <div class="center">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>State</th>
                            <th>City</th>
                            <th>2000 Population</th>
                            <th>2010 Population</th>
                            <th>2020 Population</th>
                        </tr>
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($city->state); ?></td>
                            <td><?php echo e($city->name); ?></td>
                            <td><?php echo e($city->population_2000); ?></td>
                            <td><?php echo e($city->population_2010); ?></td>
                            <td><?php echo e($city->population_2020); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer class="bg-dark">
                <div style="margin-left:20px;">
                    <p>Author: Kevin Underwood</p>
                    <p>Date: 5/9/21</p>
                    <p>Class: cscd378</p>
                    <p>Assignment 6: Database Setup</p>
                </div>
            </footer>
        </div>

    </body>

</html>
<?php /**PATH C:\Users\guruk\source\repos\underwoodkcscd378hw6\resources\views/cities.blade.php ENDPATH**/ ?>