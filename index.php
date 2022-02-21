<?php
     require "inisialisasi.php";
     require "bot.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>API | Bingbon</title>

     <!-- <meta http-equiv="refresh" content="5" /> -->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="judul">
          <div class="nama">
               <p>Data API Bingbon</p>
          </div>
     </div>
     <div class="waktu">
          <div class="atas">
               <p>Waktu refresh : </p>
               <p id="wtnya"></p>
               <div class="clear"></div>
          </div>
          <div class="bawah">
               <p>Waktu berjalan : </p>
               <p id="time"></p>
               <div class="clear"></div>
          </div>
     </div>
     <div class="load">
          <div class="btload">
               <form method="post" action="" name="inpt">
                    <div class="input-group mb-3">
                         <input name="pilihinpt" id="inputtime" type="number" class="form-control" placeholder="Input waktu refresh" aria-label="Recipient's username" aria-describedby="basic-addon2">
                         <span class="input-group-text" id="basic-addon2">detik</span>
                    </div>
                    <button type="button" class="btn btn-outline-dark" id="bt">Atur</button>
               </form>
          </div>
     </div>
     <div class="isi">
          <table class="table table-striped">
               <thead class="table-dark">
                    <tr>
                         <th scope="col">NO</th>
                         <th scope="col">Asset</th>
                         <th scope="col">Pair</th>
                         <th scope="col">Last</th>
                         <th scope="col">High</th>
                         <th scope="col">Low</th>
                         <th scope="col">Last = low ?</th>
                         <th scope="col">Last = high ?</th>
                    </tr>
               </thead>
               <tbody class="table-info">
                    
                    <?php 
                    $no = 1;
                    foreach($data['data']['result'] as $baris){
                         $low = $baris['low'];
                         $last = $baris['last_price']; 
                         $high = $baris['high'];
                         $nm = $baris['base_currency'];
                         if ($last <= $low) {
                              $lw = "Iya : ";
                         }else{
                              $lw = "Tidak : ";
                         }
                         if ($last >= $high){
                              $hg = "Iya : ";
                         }else{
                              $hg = "Tidak : ";
                         }
                    ?>

                    <tr>
                         <th scope="row"> <?php echo $no ?> </th>
                         <td> <?php echo $baris['base_currency'] ?> </td>
                         <td> <?php echo $baris['quote_currency'] ?> </td>
                         <td> <?php echo $baris['last_price'] ?> </td>
                         <td> <?php echo $baris['high'] ?> </td>
                         <td> <?php echo $baris['low'] ?> </td>
                         <td> <?php echo $lw; echo $baris['last_price']; echo" = "; echo $baris['low'] ?> </td>
                         <td> <?php echo $hg; echo $baris['last_price']; echo" = "; echo $baris['high'] ?> </td>
                    </tr>
                    
                    <?php
                         if ($last <= $low) {
                              rendah($nm,$bot, $user, $last, $low);
                         }
                         if ($last >= $high){
                              tinggi($nm,$bot, $user, $last, $high);
                         }
                    $no += 1;
                    }
                    ?>
               
               </tbody>
          </table>
     </div>
     <script src="javascript.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>