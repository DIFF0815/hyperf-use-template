<?php
/**
 * Created by.
 * User: DIFF
 * DATE: 2022/6/27
 * TIME: 11:59
 */

namespace App\Service;

use App\Utils\Log\Log;
use Psr\Log\LogLevel;

class LogService
{
    public static function record($message,$context){
        Log::get('default')->log(LogLevel::INFO,$message,$context);
    }

}