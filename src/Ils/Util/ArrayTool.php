<?php
namespace Ils\Util;

class ArrayTool
{
    public static function querySelectorAll($array, $path, $separator = '.')
    {
        $keys = explode($separator, $path);
        $result = $array;
        foreach ($keys as $key) {
            if (isset($result[$key])) {
                $result = $result[$key];
            } else {
                return null;
            }
        }
        return $result;
    }
}
