<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Tugas PHP 7 </title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#date" ).datepicker({
        autoclose:true,
      todayHighlight:true,
      format:'yyyy-mm-dd',
      language: 'id'
    });
  } );
  </script>
</head>

<body class="jeda">
<h2>Tugas 7</h2>
    <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <br>
            <label >Tanggal Lahir :</label>
            <input type="text" id="date">
            <br>
            <label>Pekerjaan: 
            <select name='pekerjaan'>
                <option value='Barista'>Barista</option>
                <option value='Waiters'>Waiters</option>
                <option value='Cleaner'>Cleaner</option>
                <option value='Manajer'>Manajer</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Nama: ' . $_POST['nama'];
        $tanggal = new DateTime('1998-08-25');
        $today = new DateTime('today');
        $y = $today->diff($tanggal)->y;
        $m = $today->diff($tanggal)->m;
        $d = $today->diff($tanggal)->d;
        echo " <br> Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Barista"){
            echo '<br> Gaji: Rp. 5.000.000,-';
        }elseif($pekerjaan == "Waiters"){
            echo '<br> Gaji: Rp. 4.000.000,-';
        }elseif($pekerjaan == "Cleaner"){
            echo '<br> Gaji: Rp. 3.000.000,-';
        }elseif($pekerjaan == "Manajer"){
            echo '<br> Gaji: Rp. 14.000.000,-';
        }
    ?>
