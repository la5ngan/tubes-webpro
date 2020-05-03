<html>
    <head>
        <title>
            Hapus Obat | Ngobat.id
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources\style.css') ?>">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </head>
    <body style="max-width:100%; width: 100%;">
        <div class="container" style="max-width: 100%; width: 100%; max-height: 100%;  height:100%; padding-right: 0px;">
            <div class="row" style="height: 100%;">
                <div class="col-lg-2" style="background-color: rgb(62, 131, 62); padding: 0; color: white;">
                    <div class="row" style="padding:20px;">
                        <div class="col-lg-4" style="padding: 10px;">
                            <img src="<?php echo base_url('resources\test.jpg') ?>" width="100%" style="border-radius: 50px;">
                        </div>
                        <div class="col-lg-8" style="padding: 10px;">
                        <P>
                            Haii, <?php echo $usernameke ?>!
                            Bagaimana hari Anda?
                        </P>
                        <a href="<?php echo base_url('LoginControllerApotek/index'); ?>" style="color:white;">
                           Log Out
                        </a>
                        </div>
                    </div>
                    <a href="<?php echo base_url('LoginController/index'); ?>">
                    <div class="sidebarDaftarObat" onclick="location.href='daftarObat.html';">
                        Daftar Obat
                    </div>
                    </a>
                    <a href="<?php echo base_url('TambahObatController/index'); ?>">
                    <div class="sidebarDaftarObat">
                        Tambah Obat
                    </div>
                    </a>
                    <div class="sidebarDaftarObat">
                        Hapus Obat
                    </div>
                    <a href="<?php echo base_url('ProfilApotekController/index'); ?>">
                    <div class="sidebarDaftarObat" onclick="location.href='profilApotek.html'" style="position:absolute; bottom:0;">
                        Pengaturan Akun
                    </div>
                    </a>
                </div>

                <div class="col-lg-10" style="padding: 0px; max-width: 100%;">
                    <div style="background-color: rgb(33, 179, 33); color: white; padding: 30px;">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1>Hapus Obat</h1>
                            </div>
                            <div class="col-lg-6" style="text-align:right">
                                <h1>Apoteker <?php echo $nameke ?></h1>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 100px;">
                        <div style="margin-bottom: 30px;">
                        <?php echo form_open('HapusBarangController/search') ?>
                            <input style="background-color: rgb(207, 207, 207); width:90%" class="inputLogin" type="text" id="carObt" name="cariObat" placeholder="Masukkan nama obat ..." > 
                            <button type="submit" class="btn btn-primary" style="width: 100px; background-color:rgb(33, 179, 33); ">Konfirmasi</button>  
                        <?php echo form_close() ?>
                        </div>
                        <table class="table table-bordered table-responsive-md table-striped">
								<thead>
									<tr>
                                        <th class="text-center">Hapus</th>
										<th class="text-center">Kode Obat</th>
										<th class="text-center">Nama Obat</th>
										<th class="text-center">Stok</th>
									</tr>
								</thead>
								<tbody>
                                    <?php foreach ($obat as $obt) : ?>
                                    <tr>
                                        <td class="pt-3-half text-center"><?php echo anchor('HapusObatController/hapus/'.$brg['kodeobatt'], '<button type="submit" class="btn btn-primary" style="width: 100px; background-color:rgb(33, 179, 33); ">Hapus</button>') ?>  </td>
										<td class="pt-3-half text-center"><?php echo $brg['kodeobatt'] ; ?></td>
										<td class="pt-3-half text-center"><?php echo $brg['namaobatt'] ; ?></td>
                                        <td class="pt-3-half text-center"><?php echo $brg['stokobatt'] ; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
								</tbody>
							</table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>