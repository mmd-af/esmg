<?php
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

function ctpn($str){
    $english = array('0','1','2','3','4','5','6','7','8','9');
    $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    $convertedStr = str_replace($english, $persian, $str);
    return $convertedStr;
}

function short($string, $max=70)
{
 return mb_strlen($string > $max) ? mb_substr($string, 0 , $max).'...' : $string;

}

function randomSHA()
{
return  bin2hex(random_bytes(10));
    }


function generateFileName($name)
{
    $year = Carbon::now()->year;
    $month = Carbon::now()->month;
    $day = Carbon::now()->day;
    $hour = Carbon::now()->hour;
    $minute = Carbon::now()->minute;
    $second = Carbon::now()->second;
    $microsecond = Carbon::now()->microsecond;
    return $year . '_' . $month . '_' . $day . '_' . $hour . '_' . $minute . '_' . $second. '_' . $microsecond . '_' . $name;
}

function deleteFile($path)
{
    \File::delete(public_path('/upload/projects/'. $path));
}
