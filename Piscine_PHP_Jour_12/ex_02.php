<?php
function cesar2(string $chaine)
{
$chaine = strtolower($chaine);
// Tout les characteres en minuscule
for ($i = 0; $i < strlen($chaine); $i++)
// Tant que $i < Longueur de $chaine ...
{
  if($chaine[$i])=="z")
  // Si le caractere selectionner est z alors
    echo "b";
  else if($chaine[$i])=="y")
  // sinon si le charactere est y
    echo "a";
  else
  {
    if ( ord($chaine[$i]) >= 97 && ord($chaine[$i]) <= 122 )
    // Si le charactere en ascii est compris entre 'a' et 'z'
    {
      $asciiMv = ord($chaine[$i])+2;
      // Retourne le charactere ascii situer 2 positions aprés le charactere
      echo chr($asciiMv);
    }
    else
    {
      echo substr($chaine,$i,1);
    }
  }
}
echo "\n";
}
  $ascii = ord($chaine[$i]);
  // $ascii =  retourne le code ASCII du charactere selectionner
  // for($j = 0; $j < $sp; $j++){
  //
    if($ascii == 90)
    //uppercase bound
    {
      $ascii = 65; //reset back to 'A'
    }
    else if($ascii == 122)
    { //lowercase bound
      $ascii = 97; //reset back to 'a'
    }
    else {
      $ascii++;
    }
  }
  $newstring[$i] = chr($ascii);

}

echo $chaine
foreach ($tableau as $cle => $valeur)
{
  echo "[$cle] => [$valeur]\n";
}
?>
