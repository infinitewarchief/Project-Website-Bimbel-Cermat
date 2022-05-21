<html>
    <head>
        <title>Tugas Migration Ika Fitri</title>
        <style>
        body {
        width: 900px;
        background:darkred; ;
        padding: 80px;
        margin: auto;
        }
        .pink{background-color: pink;}
        .bue{background-color: plum;}
    </style>
    </head>
    <body>
    <center>
        
        <table border="1" width=55%>
            <tr class="bue"> 
                
                <td><center>No</center></td>
                <td><center>Plat Bis</center></td>
                <td><center>Merk Bis</center></td>
                <td><center>Tipe Bis</center></td>
                <td><center>Nama Supir</center></td>

            </tr>
            <?php $__currentLoopData = $bis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="pink"> 
                <td><center><?php echo e($loop->iteration); ?></center></td>
                <td><?php echo e($data->plat_bis); ?></td>
                <td><?php echo e($data->merk_bis); ?></td>
                <td><?php echo e($data->tipe_bis); ?></td>
                <td><?php echo e($data->supir->nama_supir); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        </center>
        <h1>REKAP DATA</h1>
        <h3>Jumlah bis kecil : <?php echo e($bis_kecil); ?> unit</h3>
        <h3>Jumlah bis menengah : <?php echo e($bis_menengah); ?> unit</h3>
        <h3>Jumlah bis besar : <?php echo e($bis_besar); ?> unit</h3>
        <h3>Total bis : <?php echo e($total_bis); ?> unit</h3>

    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\resources\views//tampilTerminal.blade.php ENDPATH**/ ?>