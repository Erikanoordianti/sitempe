<!DOCTYPE html>
<html lang="en-US">
    <head>
    <meta charset="UTF-8">
        <title></title>
</head>
<body>
    Cetak Informasi Penjualan
    <table>
            <tr>
            <th>No</th>
                <th>Id Penjualan</th>
                <th>Tanggal Pembelian</th>
                <th>No Nota</th>
                <th>Nama Konsumen</th>
                <th>Kualitas</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Jumlah Beli</th>
                <th>Total Bayar</th>
                <th>Status</th>
                <th>Act</th>
    </tr> 
          <?php 
          $i=1; 
          foreach($informasi_penjualan as $row): ?>
            <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row->id_penjualan?></td>
        <td><?php echo $row->tanggal_pembelian?></td>
        <td><?php echo $row->no_nota?></td>
        <td><?php echo $row->nama_konsumen?></td>
        <td><?php echo $row->kualitas?></td>
        <td><?php echo $row->ukuran?></td>
        <td><?php echo $row->harga?></td>
        <td><?php echo $row->jumlah_beli?></td>
        <td><?php echo $row->total_bayar?></td>
        <td><?php echo $row->status?></td>
        </tr>
          <?php endforeach; ?>
        </table>
        <script type="text/javascript">
          window.print();
         </script>
          </body>
          </html>