<?php

namespace NCL;

class Fix
{
    static $stack = array();
    static $pattern = "/[),.]/";

    public static function subSymbols($fullname)
    {
        self::saveSymbols($fullname);

        return preg_replace(self::$pattern, "", $fullname);
    }

    private static function saveSymbols($fullname)
    {
        $fullnameArr = explode(" ", $fullname);
        for ($i=0; $i < count($fullnameArr); $i++)
        { 
            preg_match_all(self::$pattern, $fullnameArr[$i], $matches);
            array_push(self::$stack, implode($matches[0]));
        }

        return self::$stack;
    }

    public static function getFormattedOut($fullname)
    {
        $fullnameArr = explode(" ", $fullname);
        for ($i=0; $i < count($fullnameArr); $i++)
        { 
            $fullnameArr[$i] .= self::$stack[$i];
        }
        self::$stack = array();

        return implode(" ", $fullnameArr);
    }
}

?>