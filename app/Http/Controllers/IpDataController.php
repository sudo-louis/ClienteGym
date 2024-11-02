<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ipdata\ApiClient\Ipdata;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;

class IpDataController extends Controller
{
    public function getUserInfo(Request $request) {
        $httpClient = new Psr18Client();
        $psr17Factory = new Psr17Factory();
        $key = env('IPDATA_KEY');
        $ipdata = new Ipdata($key, $httpClient, $psr17Factory);
    


        $userIp = '8.8.8.8';
        $data = $ipdata->lookup($userIp);
        //dd($data);
    
        $userData = [
            'city' => $data['city'] ?? 'Ciudad desconocida',
            'region' => $data['region'] ?? 'Región desconocida',
            'country_name' => $data['country_name'] ?? 'País desconocido',
            'currency' => [
                'name' => $data['currency']['name'] ?? 'Moneda desconocida',
                'symbol' => $data['currency']['symbol'] ?? ''
            ],
            'time_zone' => [
                'name' => $data['time_zone']['name'] ?? 'Zona horaria desconocida'
            ],
        ];
    
        return view('index', compact('userData'));
    }    
}