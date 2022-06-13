<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function sendSms(Request $request){
        
        $apiBotToken = "5476361510:AAE4RWNctlUNmWq_0qVFUR4a7ASxpYQCOts";

        foreach ($request->list as $value) {
            $data = [
                'chat_id' => $value['chat_id'],
                'text' => $value['text']
            ];

            Http::post('https://api.telegram.org/bot'.$apiBotToken.'/sendMessage', $data);    
        }
    }
}
