<?php

  /**
   * Fixes the strings if the majority of letters are upper case or lower case.
   * @param string $s
   * @return string
   */
  function str_fix(string $s)
  {
    $up = strtoupper($s);

    $low = strtolower($s);
  
    $changeup = levenshtein($s, $up);

    $changedown = levenshtein($s, $low);
  
    if($changeup < $changedown)
    {
      return $up;
    }
    elseif($changeup > $changedown)
    {
      return $low;
    }
    elseif($changeup == $changedown)
    {
      return $low;
    }
  }
  
 //Will return 'california'
  echo str_fix('califoRNIA');