<?php

namespace App\Controllers;

use App\Services\Cache\FileCache;
use App\Services\Ip2Geo\Ip2GeoFromApi;
use App\Services\Ip2Geo\Ip2GeoRepeating;
use App\Services\Ip2Geo\IpApiException;
use App\Services\Ip2Geo\Ip2GeoCaching;
use App\Services\Ip2Geo\IpNotFoundException;
use App\Services\Response;


class HomeController extends Controller
{
    const CACHE_TIME = 1800; // 30 min
    const NUMBER_OF_REQUESTS = 3;

    /**
     * @return Response
     */
    public function index()
    {
        $ip = new Ip2GeoFromApi($this->request->get['ip']);
        $IpRepeated = new Ip2GeoRepeating($ip, self::NUMBER_OF_REQUESTS);
        $IpCached = new Ip2GeoCaching($IpRepeated, new FileCache(), self::CACHE_TIME);

        try {
            return $this->response->view($IpCached->getGeo());
        } catch (IpNotFoundException $exception) {
            return $this->response->notFound();
        } catch (IpApiException $exception) {
            return $this->response->error(503, 'Service Unavailable');
        }
    }
}