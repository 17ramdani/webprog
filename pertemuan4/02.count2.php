<?php 
    $zoo = [
            "Ayam" =>["kampung","buras","kate","hutan"],
            "Kucing" => ["persia","himalaya","anggora","kampung","hutan"]
    ];
echo count ($zoo);//2
echo "<br>";
echo count ($zoo, COUNT_RECURSIVE);//11