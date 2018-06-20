<?php

function clear($str) 
{
    $str = str_replace('[31m', '', $str); 
    $str = str_replace('[32m', '', $str); 
    $str = str_replace('[33m', '', $str); 
    $str = str_replace('[0m', '', $str); 
    return $str;
}

function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}

?>