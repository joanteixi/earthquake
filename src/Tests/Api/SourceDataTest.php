<?php

/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 9/3/17
 * Time: 23:14
 */
namespace Api\Tests;

use Api\SourceData;
use Tests\Api\SourceDataHelper;

class SourceDataTest extends \PHPUnit\Framework\TestCase
{

    /**
     *
     */
    public function testCreateEarthquakeFromData()
    {
        $source = new SourceData();
        $earthquakeData = $source->createEarthquake(SourceDataHelper::getOneEarthquake());

        $this->assertEquals("2.33", $earthquakeData->getMagnitude());
        $this->assertEquals(-155.2298279, $earthquakeData->getLat());
        $this->assertEquals(19.3826675, $earthquakeData->getLng());
        $this->assertEquals('5km S of Volcano, Hawaii', $earthquakeData->getPlace());
        $this->assertEquals('2017-03-09 22:01:02', $earthquakeData->getTime()->format('Y-m-d H:i:s'));

    }

    /**
     * @test
     */
    public function shouldReturnCollectionOfEarthquakes()
    {
        $source = new SourceData();
        $source->getData(SourceDataHelper::getCollection());

        $this->assertEquals(6, count($source->getEarthquakes()));

    }

    /**
     *
     */
    public function shouldSendJsonObject()
    {
        $source = new SourceData();
        $source->getData(SourceDataHelper::getCollection());

        $toSend = $source->toJson();
        $expectedKeys = json_encode(array(
            'magnitud', 'place', 'lat', 'lng', 'time'
        ));

        $this->assertArrayHasKey('magnitud', $toSend[0]);
    }




}
