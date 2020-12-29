<?php 

class ProveedorRequest
{
    function sizes($url)
    {
        $ch = curl_init();
        $timeout = 0;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($ch,  CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cache-Control: no-cache"));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        return curl_exec($ch);
    }
    
}