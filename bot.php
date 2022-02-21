<?php
     // id bot
     $bot = 'ID_BOT';
     
     // id grub / user 
     $user = 'ID_USER';

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
