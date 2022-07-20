<!DOCTYPE html>
<html><head>
        <title></title>
    </head><body>
        <h3 style="text-align : center">Daftar Request</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Info Hubungin</th>
                <th>No HP</th>
                <th>Tipe Kost</th>
                <th>Nama Properti</th>
                <th>URL Properti</th>
                <th>Harga</th>
                <th>Provinsi</th>
                <th>Kabupaten/Kota</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Alamat</th>
                <th>Jumlah Kamar</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($request as $rqst) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rqst->nama_depan ?></td>
                <td><?php echo $rqst->nama_belakang ?></td>
                <td><?php echo $rqst->info_hub ?></td>
                <td><?php echo $rqst->no_hp ?></td>
                <td><?php echo $rqst->tipe_kos ?></td>
                <td><?php echo $rqst->nama_properti ?></td>
                <td><?php echo $rqst->url_properti ?></td>
                <td><?php echo $rqst->harga ?></td>
                <td><?php echo $rqst->provinsi ?></td>
                <td><?php echo $rqst->kabupaten_kota ?></td>
                <td><?php echo $rqst->kecamatan ?></td>
                <td><?php echo $rqst->kelurahan ?></td>
                <td><?php echo $rqst->alamat ?></td>
                <td><?php echo $rqst->jumlah_kamar ?></td>
            </tr>
            <?php endforeach; ?> 
        </table>
    </body></html>