<?php

/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 9/3/17
 * Time: 23:12
 */

namespace Api;

class SourceData
{

    CONST URL = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson";

    protected $earthquakes;

    public function __construct()
    {
        $this->earthquakes = [];
    }

    public function getData()
    {

    }

    public function createEarthquake($rawData)
    {
        $earthquake = Earthquake::createEarthquake($rawData);
        $this->earthquakes[] = $earthquake;

        return $earthquake;
    }

}