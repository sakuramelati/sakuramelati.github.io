<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

     <div class="row">
         <div class="col-12">
         <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Aspirasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                <?php foreach($menu as $m) : ?>
                <tr>
                <th scope="row"><?= $i;?></th>
                <td><?= $m['name_aspirasi'];?></td>
                <td><?= $m['isi_aspirasi'];?></td>
                </tr>    
                <?php $i++ ;?>
                <?php endforeach; ?>           
            </tbody>
            </table>
        </div>
    </div>
					
					
					
					
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
			
			