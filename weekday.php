<?php

  /**
   * Receives a specific date and returns the day of the week it was
   * @param string $date
   * @return string
   */

  function day_of_the_week(string $date)
  {

    $date = str_replace('/', '-', $date);

    $dat = new DateTime($date);

    $now = new DateTime('now');

    $interval = $dat->diff($now);
 
    $dias = $interval->days;
 
    $week = getdate(time()-60*60*24*$dias);
   
   return $week['weekday'];
  }

  //Will return 'Sunday'
  echo day_of_the_week('02/06/1985');