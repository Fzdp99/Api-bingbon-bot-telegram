<?php
     $link = 'https://api.bingbon.com/api/v1/market/symbols';
     $konten = file_get_contents($link);
     $data = json_decode($konten, true);
?>