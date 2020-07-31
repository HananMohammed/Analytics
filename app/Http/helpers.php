<?php

if (! function_exists('asset_public')) {
    /**
    * Full asset public path
    */
    function asset_public($path = null)
    {
        return env('FRONT_PUBLIC', 'http://ehm-eg.com/Admins/public/') . $path;
    }
}
function youtube_channel_data($channel = '' , $type= 'views'){
    $cache="1080";
    $cacheFile="datayoutube123.txt";
    $apiKey="AIzaSyCYmCNADWVKqCvTWc4X7iNjbOUM19_sChY";
    if(file_exists($cacheFile) && ( time() - $cache > filemtime($cacheFile))){
        $oldData = file_get_contents($cacheFile);
        $contents= str_replace($oldData , '',$oldData);
        file_put_contents($cacheFile, $contents);
        $cachedResult = unserialize(file_get_contents("$cacheFile"));
        return number_format($cachedResult[$type]);
    }else{
        $json_string = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel."&key=" .$apiKey);
        $json = json_decode($json_string , true);
        if(count($json ,1)!=0){
            $temp['views'] = $json['items']['0']['statistics']['viewCount'];
            $temp['subscribers'] = $json['items']['0']['statistics']['subscriberCount'];
            $temp['count'] = $json['items']['0']['statistics']['videoCount'];
            $result[] =$temp;
            $youtubeData = serialize($temp);
            $fp = fopen($cacheFile , 'w');
            fwrite($fp , $youtubeData);
            fclose($fp);
            return number_format($temp["$type"]);
        }else{
            $result = unserialize(file_get_contents('$cacheFile'));
            return number_format($result["$type"]);
        }
    }
}

