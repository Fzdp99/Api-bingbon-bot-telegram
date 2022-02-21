<?php
     // id bot
     $bot = 'bot2138385957:AAF-Fhgggqn5_LAnXekrnA6w4JU6jXtc3dY';
     
     // id grub / user 
     $user = '-729010872';

     function rendah($nm,$bot,$user,$last, $low){
          $url='https://api.telegram.org/'.$bot.'/sendMessage?chat_id='.$user.'&text=Bingbon%0aNama : '.$nm.'%0aHarga : Rendah%0aLow : '.$low.'%0aLast : '.$last.'&parse_mode=html';

          $result = file_get_contents($url,true);
          return $result;
     }

     function tinggi($nm,$bot,$user,$last, $high){
          $url='https://api.telegram.org/'.$bot.'/sendMessage?chat_id='.$user.'&text=Bingbon%0aNama : '.$nm.'%0aHarga : Tinggi%0aHigh : '.$high.'%0aLast : '.$last.'&parse_mode=html';

          $result = file_get_contents($url,true);
          return $result;
     }
?>