<?php

class Solution
{

    /**
     * @param  String[]  $paths
     * @return String[][]
     */
    function findDuplicate($paths)
    {
        $files = [];
        foreach ($paths as $path) {
            $parts = explode(' ', $path);
            foreach (array_slice($parts, 1) as $file) {
                $m = [];
                preg_match('/(.*)\((.*)\)$/', $file, $m);
                $files[$m[2]][] = $parts[0].'/'.$m[1];
            }
        }

        $result = [];
        foreach ($files as $file) {
            if (count($file) > 1) {
                $result[] = $file;
            }
        }

        return $result;
    }
}