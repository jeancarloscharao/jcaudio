<?php

// $audio1 = "C:". DIRECTORY_SEPARATOR ."ffmpeg". DIRECTORY_SEPARATOR ."bin". DIRECTORY_SEPARATOR ."m1.mp3";
// $audio2 = "C:". DIRECTORY_SEPARATOR ."ffmpeg". DIRECTORY_SEPARATOR ."bin". DIRECTORY_SEPARATOR ."m2.mp3";
// $audioSaida = "C:". DIRECTORY_SEPARATOR ."ffmpeg". DIRECTORY_SEPARATOR ."bin". DIRECTORY_SEPARATOR ."out.mp3";


$audio1 = "m1.mp3";
$audio2 = "m2.mp3";
$audioSaida = "out.mp3";


$CaminhoBin = "C:". DIRECTORY_SEPARATOR .
              "ffmpeg". DIRECTORY_SEPARATOR .
              "bin". DIRECTORY_SEPARATOR .
              "ffmpeg.exe";

$parametros = '"amovie=audio2:loop=0,asetpts=N/SR/TB[beep]; [0][beep]amix=duration=shortest,volume=2"';
$parametros =  str_replace("audio2",$audio2,$parametros);
$comando = "$CaminhoBin -i $audio1 -filter_complex $parametros  $audioSaida";

$output = shell_exec($comando);
echo "<pre>$output</pre>";


?>