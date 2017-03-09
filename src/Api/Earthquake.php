<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 9/3/17
 * Time: 23:35
 */

namespace Api;


class Earthquake
{
    /** @var  float */
    protected $magnitude;

    /** @var  float */
    protected $lat;

    /** @var  float */
    protected $lng;

    /** @var  \DateTime */
    protected $time;


    protected function __construct($data)
    {
        $this->processData($data);
    }

    protected function processData($data)
    {

        $this->setMagnitude($data['properties']['mag']);
        $this->setLat($data['geometry']['coordinates'][0]);
        $this->setLng($data['geometry']['coordinates'][1]);
    }



    public static function createEarthquake($data)
    {
        return new self($data);
    }

    /**
     * @return float
     */
    public function getMagnitude(): float
    {
        return $this->magnitude;
    }

    /**
     * @param float $magnitude
     */
    public function setMagnitude(float $magnitude)
    {
        $this->magnitude = $magnitude;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat(float $lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLng(): float
    {
        return $this->lng;
    }

    /**
     * @param float $lng
     */
    public function setLng(float $lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
    }



}