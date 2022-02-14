<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalkulatorModel extends Model
{
    private static $hasilakhir = 0;
    private static $calc = ["a" => 0, "b" => 0, "operasi" => '+'];

    public static function setCalc($operasi)
    {
        self::$calc = $operasi;
    }

    public static function setHitung()
    {
        $a = (int)self::$calc['a'];
        $b = (int)self::$calc['b'];
        $operasi = self::$calc['operasi'];
        switch ($operasi){
            case '+' :
                $hasil = $a + $b;
                break;
            case '-' :
                $hasil = $a - $b;
                break;
            case '*' :
                $hasil = $a * $b;
                break;
            case '/' :
                if ($b !== 0){
                    $hasil = $a / $b;
                } else{
                    $hasil = "Tidak bisa dilakukan";
                }    
                break;
            default:
                $hasil = "";
        }
        return $hasil;
    }

    public static function getHasil()
    {
        return self::$hasilakhir = KalkulatorModel::setHitung();
    }
}
