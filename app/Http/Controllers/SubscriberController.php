<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    /**
     * @param Request $request
     */
    public function subscribe(Request $request ){
        $data = $request->validate([
            'url'=>'required|url'
        ]);
        $channel =explode('/',$data['url']);
        for($i = 0 ; $i<=count($channel) ; $i++){
            if($channel[$i] == 'channel'){
                $subscribers= youtube_channel_data($channel[$i+1] ,$type="subscribers" );
                $viewCount =youtube_channel_data($channel[$i+1]);
                $videoCount = youtube_channel_data($channel[$i+1],$type="count");
                return view('components.subscribers',compact('subscribers','videoCount','viewCount','data'));
            }
            elseif ( ! in_array("channel" ,$channel ))
            {
              $wrongLink  =  "kindly Enter  a wright youtube channel Link like https://www.youtube.com/channel/UCQI-Ym2rLZx52vEoqlPQMdg ";
                return view('components.youtube-subscriber',compact('wrongLink'));
            }

        }
    }
}
