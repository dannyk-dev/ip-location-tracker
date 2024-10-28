<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as Response;
use Stevebauman\Location\Facades\Location as IpLocation;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request): Response
    {
        $ip = $request->ip();
        // $test_ip = "177.220.183.155";
        $ip = $ip;

        $location = IpLocation::get($ip);

        if (!Str::contains($ip, ['localhost', '127.0.0.1'])) {
            Location::create([
                'areaCode' => $location->areaCode,
                'cityName' => $location->cityName,
                'countryCode' => $location->countryCode,
                'currencyCode' => $location->currencyCode,
                'ip' => $location->ip,
                'isoCode' => $location->isoCode,
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
                'metroCode' => $location->metroCode,
                'postalCode' => $location->postalCode,
                'regionCode' => $location->regionCode,
                'timezone' => $location->timezone,
                'zipCode' => $location->zipCode
            ]);
        }

        return Inertia::render('Index', [
            'ip' => $ip,
            'location' => $location ?? [],
        ]);
    }
}
