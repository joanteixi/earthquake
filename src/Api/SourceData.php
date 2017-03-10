<?php

/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 9/3/17
 * Time: 23:12
 */

namespace Api;

use GuzzleHttp\Client;

class SourceData implements \Iterator
{

    CONST URL = "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson";

    protected $earthquakes;
    private $position = 0;

    public function __construct()
    {
        $this->earthquakes = [];
        $this->position = 0;
    }


    public function connectToSource()
    {
        $client = new Client();
        $this->getData($client->get(self::URL));
    }

    public function getData($rawData)
    {
        foreach ($rawData['features'] as $earthquake) {
            $this->createEarthquake($earthquake);
        }
    }

    public function createEarthquake($rawData)
    {
        $earthquake = Earthquake::createEarthquake($rawData);
        $this->earthquakes[] = $earthquake;

        return $earthquake;
    }

    /**
     *
     */
    public function getEarthquakes(): array
    {
        return $this->earthquakes;
    }


    public function current()
    {
        return $this->earthquakes[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->earthquakes[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }


}