<?php

/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 9/3/17
 * Time: 23:14
 */
namespace Api\Tests;
use Api\SourceData;

class SourceDataTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function testGetData()
    {
        $source = new SourceData();
        $earthquakeData = $source->createEarthquake($this->getRawData());

        $this->assertEquals("2.33", $earthquakeData->getMagnitude());
        $this->assertEquals(-155.2298279, $earthquakeData->getLat());
        $this->assertEquals(19.3826675, $earthquakeData->getLng());

    }

    private function getRawData()
    {
        return json_decode(<<<EOF
        {
            "type": "Feature",
      "properties": {
        "mag": 2.33,
        "place": "5km S of Volcano, Hawaii",
        "time": 1489096862170,
        "updated": 1489097203270,
        "tz": -600,
        "url": "https://earthquake.usgs.gov/earthquakes/eventpage/hv61636536",
        "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/hv61636536.geojson",
        "felt": null,
        "cdi": null,
        "mmi": null,
        "alert": null,
        "status": "automatic",
        "tsunami": 0,
        "sig": 84,
        "net": "hv",
        "code": "61636536",
        "ids": ",hv61636536,",
        "sources": ",hv,",
        "types": ",geoserve,origin,phase-data,",
        "nst": 57,
        "dmin": 0.01362,
        "rms": 0.19,
        "gap": 45,
        "magType": "ml",
        "type": "earthquake",
        "title": "M 2.3 - 5km S of Volcano, Hawaii"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
            -155.2298279,
            19.3826675,
            31.69
        ]
      },
      "id": "hv61636536"
    }
EOF
    ,true);
    }
}
