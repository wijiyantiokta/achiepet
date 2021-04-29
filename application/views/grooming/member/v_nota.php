
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title><?= $title ?></title>
  <link href="../styles/styles_cetak.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
    window.print();
    window.onfocus=function(){ window.close();}
  </script>
  <style>
    .nota {
      margin-bottom: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
      width: 800px;
    }
  </style>
</head>
<body onLoad="window.print()">
  <center>
    <div style="border-color:#202020;" class="nota"><br>
      <table class="table-list" width="90%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td height="87" colspan="3" align="center">
            <strong>NOTA</strong><br />
            <!--   <strong><?= $instansi->alamat ?></strong> -->
            <hr>
          </td>
        </tr>
        <tr>
          <td><b>Nama</b></td>
          <td>:</td>
          <td><?= $order->nama_pelanggan ?></td>
        </tr>
        <tr>
          <td><b>Status</b></td>
          <td>:</td>
          <td><?= $order->status ?></td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
      </table>
      <table class="table-list" width="90%" border="1" cellspacing="0" cellpadding="2">
       <tr>
        <th>Tanggal</th>
        <th>Jenis Grooming</th>
        <th>Harga</th>
        <th>Hewan</th>
      </tr>
      <tr>
        <td><?= $order->tanggal ?> <?= $order->jam ?></td>
        <td><?= $order->jenis_grooming ?></td>
        <td>Rp. <?= number_format($order->harga_grooming) ?></td>
        <td><?= $order->hewan ?></td>
      </tr>
    </table><br><br>
  </div>
</center>
</body>
</html>
