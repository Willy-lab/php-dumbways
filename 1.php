<?php
$dataKey = array('dumb', 'ways', 'the', 'best');
$word = 'dumbways';

function check($dataKey, $word)
{
  for ($i=0; $i < sizeof($dataKey); $i++) {
    if(strpos($word, $dataKey[$i]) === false) {
      echo $dataKey[$i]." => false \n";
    } else {
      echo $dataKey[$i]." => true \n";
    }
  }
}
check($dataKey, $word);
?>