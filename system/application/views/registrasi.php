    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">  <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user" >

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama"
                                        placeholder="Nama Anda" nama="nama">
                                        <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                                        
                                </div>
                                

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username"
                                        placeholder="username" nama="username">
                                        <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password_1" placeholder="Password" name="password_1">
                                            <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password_2" placeholder="Ulangi Password" name="password_2">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Buat Akun</button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>