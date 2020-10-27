<!-- container untuk menampung, atau menaruh sesuatu -->
<section id="" class="">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Daftar ikan</h3>
                <ul class="list-group">
                    <center>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Jenis ikan</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Nama Pembeli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tokoikan as $ipam) : ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ipam['Jenisikan']; ?></td>
                                        <td><?= $ipam['size']; ?></td>
                                        <td><?= $ipam['harga']; ?></td>
                                        <td><?= $ipam['namapembeli']; ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </center>
            </div>
        </div>
        
    </div>
</section>