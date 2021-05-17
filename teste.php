<?php
function escreverOlaMundo($vez){
    echo "<div style=\"color:rgb(".($vez<=255 ? 0 : ($vez-255)).",127,".($vez<=255 ? $vez : 255).");\">Olá, Mundo! $vez</div>";
}

for($i=0;$i<=510;$i++){
    escreverOlaMundo($i);
}