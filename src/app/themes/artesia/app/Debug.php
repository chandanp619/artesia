<?php 

namespace App;

class Debug
{

    private static function format($output)
    {
        if ( is_array( $output ) || is_object( $output ) ) {
            return( print_r( $output, true ) );
        } else {
            return( $output );
        }        
    }

    private static function encodeUriComponent($str)
    {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        return strtr(rawurlencode($str), $revert);
    }

    private static function respond($output, $return) {
        if ($return) {
            return $output;
        }
        echo $output;
    }

    public static function log($output)
    {
        error_log(self::format($output));
    }

    public static function show($output, $return = false)
    {
        $output = "<pre>" . self::format($output) . "</pre>";
        self::respond($output, $return);
    }

    public static function console($output, $return = false)
    {
        $output = "<pre class='debug'>" . self::encodeUriComponent(json_encode($output)) . "</pre>";
        self::respond($output, $return);
    }
}