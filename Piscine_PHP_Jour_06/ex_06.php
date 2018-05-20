<?php
function my_comb_n($n){
  if ($n==9){
    for($b=1;$b<=1;$b++){
      for($c=$b+1;$c<=2;$c++){
        for($d=$c+1;$d<=3;$d++){
          for($e=$d+1;$e<=4;$e++){
            for($f=$e+1;$f<=5;$f++){
              for($g=$f+1;$g<=6;$g++){
                for($h=$g+1;$h<=7;$h++){
                  for($i=$h+1;$i<=8;$i++){
                    for($j=$i+1;$j<=9;$j++){
                      echo $b . $c . $d . $e . $f . $g . $h . $i . $j . "\n";
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
  if ($n==8){
    for($c=1;$c<=2;$c++){
      for($d=$c+1;$d<=3;$d++){
        for($e=$d+1;$e<=4;$e++){
          for($f=$e+1;$f<=5;$f++){
            for($g=$f+1;$g<=6;$g++){
              for($h=$g+1;$h<=7;$h++){
                for($i=$h+1;$i<=8;$i++){
                  for($j=$i+1;$j<=9;$j++){
                    echo $c . $d . $e . $f . $g . $h . $i . $j . "\n";
                  }
                }
              }
            }
          }
        }
      }
    }
  }
  if ($n==7){
    for($d=1;$d<=3;$d++){
      for($e=$d+1;$e<=4;$e++){
        for($f=$e+1;$f<=5;$f++){
          for($g=$f+1;$g<=6;$g++){
            for($h=$g+1;$h<=7;$h++){
              for($i=$h+1;$i<=8;$i++){
                for($j=$i+1;$j<=9;$j++){
                  echo $d . $e . $f . $g . $h . $i . $j . "\n";
                }
              }
            }
          }
        }
      }
    }
  }
  if ($n==6){
    for($e=1;$e<=4;$e++){
      for($f=$e+1;$f<=5;$f++){
        for($g=$f+1;$g<=6;$g++){
          for($h=$g+1;$h<=7;$h++){
            for($i=$h+1;$i<=8;$i++){
              for($j=$i+1;$j<=9;$j++){
                echo $e . $f . $g . $h . $i . $j . "\n";
              }
            }
          }
        }
      }
    }
  }
  if ($n==5){
    for($f=1;$f<=5;$f++){
      for($g=$f+1;$g<=6;$g++){
        for($h=$g+1;$h<=7;$h++){
          for($i=$h+1;$i<=8;$i++){
            for($j=$i+1;$j<=9;$j++){
              echo $f . $g . $h . $i . $j . "\n";
            }
          }
        }
      }
    }
  }
  if ($n==4){
    for($g=1;$g<=6;$g++){
      for($h=$g+1;$h<=7;$h++){
        for($i=$h+1;$i<=8;$i++){
          for($j=$i+1;$j<=9;$j++){
            echo  $g . $h . $i . $j . "\n";
          }
        }
      }
    }
  }
  if ($n==3){
    for($h=1;$h<=7;$h++){
      for($i=$h+1;$i<=8;$i++){
        for($j=$i+1;$j<=9;$j++){
          echo $h . $i . $j . "\n";
        }
      }
    }
  }
  if ($n==2){
    for($i=1;$i<=8;$i++){
      for($j=$i+1;$j<=9;$j++){
        echo $i . $j . "\n";
      }
    }
  }
  if ($n==1){
    for($j=1;$j<=9;$j++){
      echo $j . "\n";
    }
  }
  if ($n==0){
    echo "";
  }
}
my_comb_n(9)
?>
