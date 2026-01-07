<?php

    /**
     * Puts words in an acronym
     * @param string $s
     * @return string
     */
    function acronym($s)
    {
        $a = explode(' ', $s);

        for($i=0; $i<count($a); $i++)
        {
            if($a[$i]=='of' || $a[$i]=='Of' || $a[$i]=='oF' || $a[$i]=='OF'){
                $a[$i] = ' ';
            }
            
            $a[$i] = substr($a[$i], 0, 1);
        }
    
        for($i=0; $i<count($a); $i++)
        {
            if($a[$i] != ' '){
                $arr[] = $a[$i];
            }
        }
     
        $acronym = implode($arr);

        $acronym = strtoupper($acronym);

       return $acronym;
    }

    //Will return 'RHCP'
    echo acronym('Red Hot Chili Peppers');