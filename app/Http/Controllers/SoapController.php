<?php

namespace App\Http\Controllers;
use App\Http\Requests\SoapRequest;
use Illuminate\Support\Facades\Http;

class SoapController extends Controller
{
    public function index(SoapRequest $request) {
        return Http::get('http://ws.cdyne.com/ip2geo/ip2geo.asmx/ResolveIP?ipAddress='.$request->validated()['ip'].'&licenseKey=0');
    }
}
