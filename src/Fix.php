<?php

namespace NCL;

header('Content-type: text/html; charset=utf-8');

class Fix
{
    static $pattern = array();
    private static function saveSymbols($fullname)
    {
        $array = explode(" ", $fullname);
        for ($i=0; $i < count($array); $i++)
        { 
            if (strpos($array[$i], ")"))
            {
                self::$pattern[$i] .= " )";             
            }
            if (strpos($array[$i], ","))
            {
                self::$pattern[$i] .= " ,"; 
            }
            if (strpos($array[$i], "."))
            {
                self::$pattern[$i] .= " .";
            }
        }
    
        return self::$pattern;
    }

    public static function getFormattedOut($fullname)
    {
        $array = explode(" ", $fullname);
        for ($i=0; $i < count($array); $i++)
        { 
            if (self::$pattern[$i] == null) 
            {
                continue;
            }
            if (strpos(self::$pattern[$i], ")"))
            {
                $array[$i] .= ")";              
            }
            if (strpos(self::$pattern[$i], ","))
            {
                $array[$i] .= ",";   
            }
            if (strpos(self::$pattern[$i], "."))
            {
                $array[$i] .= ".";   
            }
        }
        self::$pattern = array();
        $fullname = implode(" ", $array);
        
        return preg_replace('/\s+/', ' ', $fullname);
    }
    
    public static function subSymbols($fullname)
    {
        self::saveSymbols($fullname);

        $fullname = str_replace(")", " ", $fullname);
        $fullname = str_replace(",", " ", $fullname);
        $fullname = str_replace(".", " ", $fullname);
        $fullname = str_replace("-", " ", $fullname);
        
        return $fullname;
    }
}

?>