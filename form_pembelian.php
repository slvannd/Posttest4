<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMBELIAN</title>
    <link rel="stylesheet" href="form_pembelian.css" />
    
</head>

<body>
<form action="tampildata.php" method="POST">

        <div class="form pembelian">
            <td>
            <h3>Form Pembelian</h3> 

           
                <input type="nama barang" id="brg" name="brg" placeholder =" masukkan nama barang ">
                <br>
                <input type="jumlah" id="jmlh" name="jmlh"  placeholder =" masukkan jumlah barang yang ingin dibeli ">
                <br>
                <input type="nama pembeli" id="nm" name="nm"  placeholder =" masukkan nama pembeli">
                <br>
                <input type="alamat" id="almt" name="almt"  placeholder =" masukkan alamat ">
                <br>
                <input type="Telepon" id="tlp" name="tlp"  placeholder =" masukkan no handphone aktif">
                <br>
                <!-- <input type="submit" name="sign-up"> -->
                <input type="submit"  id ="submit"name="commit" value="selesai" data-disable-with="Please wait...">
            </td>
        
        </div>
        
    </form>
    

</body>

</html>