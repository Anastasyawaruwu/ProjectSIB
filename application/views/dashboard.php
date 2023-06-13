<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container-fluid">

    <div class="row  text-center mt-3">
        <?php foreach ($barang as $barang): ?>
                        
            <div class="card ml-3 mb-2" style="width: 18rem;">
                <img src="<?php echo base_url(). '/uploads/'. $barang->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $barang->nama_barang ?></h5>
                    <small><?php echo $barang->keterangan ?></small></br>
                    <span class="badge text-bg-success mb-2">Rp. <?php echo $barang->harga ?></span></br>
                    <a href="#" class="btn btn-sm btn-primary">Tambah Ke keranjang</a>
                    <a href="#" class="btn btn-sm btn-warning">Detail</a>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
</div>