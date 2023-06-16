<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5> 
             
        <div class="card-body">
            <?php foreach($barang as $brg): ?>

            <div class="row" >
                <div class="row col-md-4">
                    <img src="<?php echo base_url(). '/uploads/'.$brg->gambar ?>" class="card-img-top">
                </div>

                <div class="row col-md-8">
                    <table class="table" >
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $brg->nama_barang ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></div></strong></td>
                        </tr>                        
                    </table>
                    
                    <div> 
                        <!-- button tambah keranjang -->
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'. $brg->id_barang, 
                    '<div class="btn btn-sm btn-warning"> Tambah ke Keranjang</div>') ?>
                    <!-- Kembali -->
                    <?php echo anchor('dashboard/index/', 
                    '<div class="btn btn-sm btn-primary"> Kembali</div>') ?></div>
                    
                </div>
                
            </div>
                    
            <?php endforeach; ?>
           
        </div>
    </div>
</div>