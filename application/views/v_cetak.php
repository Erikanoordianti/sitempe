<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cetak Informasi Penjualan</title>
</head>
<style type="text/css">
td {
    padding:5px;
}
</style>
<body style="font-family:Times New Roman;font-size:12px">
<?php $no=!; foreach($record->result() as $row){ ?>
    <center><h1>Cetak Informasi Penjualan</h1></center>
    <table border="1">
        <tr>
        <td>No</td>
                <td>Id Penjualan</td>
                <td>Tanggal Pembelian</td>
                <td>No Nota</td>
                <td>Nama Konsumen</td>
                <td>Kualitas</td>
                <td>Ukuran</td>
                <td>Harga</td>
                <td>Jumlah Beli</td>
                <td>Total Bayar</td>
                <td>Status</td>
                <td>Act</td>
</tr>
              <tr>
              <?php $no=1; foreach($record->result() as $row){?>
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
              <?php } ?>
              </table>
              </body>
              </html>
}