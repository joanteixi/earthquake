<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 10/3/17
 * Time: 23:15
 */

namespace Tests\Api;


class SourceDataHelper
{

    public static function getOneEarthquake()
    {
        return json_decode(
            <<<EOF
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
            ,
            true
        );
    }


    public static  function getCollection()
    {
        return json_decode(
            <<<EOF
    {
    "type": "FeatureCollection",
    "metadata": {
        "generated": 1489097569000,
        "url": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson",
        "title": "USGS All Earthquakes, Past Hour",
        "status": 200,
        "api": "1.5.6",
        "count": 6
    },
    "features": [
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
        },
        {
            "type": "Feature",
            "properties": {
                "mag": 2.3,
                "place": "64km NNE of Redoubt Volcano, Alaska",
                "time": 1489095712971,
                "updated": 1489095975164,
                "tz": -540,
                "url": "https://earthquake.usgs.gov/earthquakes/eventpage/ak15455370",
                "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/ak15455370.geojson",
                "felt": null,
                "cdi": null,
                "mmi": null,
                "alert": null,
                "status": "automatic",
                "tsunami": 0,
                "sig": 81,
                "net": "ak",
                "code": "15455370",
                "ids": ",ak15455370,",
                "sources": ",ak,",
                "types": ",geoserve,origin,",
                "nst": null,
                "dmin": null,
                "rms": 0.65,
                "gap": null,
                "magType": "ml",
                "type": "earthquake",
                "title": "M 2.3 - 64km NNE of Redoubt Volcano, Alaska"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -152.3451,
                    61.0329,
                    115.7
                ]
            },
            "id": "ak15455370"
        },
        {
            "type": "Feature",
            "properties": {
                "mag": 2.3,
                "place": "35km ENE of Sterling, Alaska",
                "time": 1489094935393,
                "updated": 1489095401103,
                "tz": -540,
                "url": "https://earthquake.usgs.gov/earthquakes/eventpage/ak15455166",
                "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/ak15455166.geojson",
                "felt": null,
                "cdi": null,
                "mmi": null,
                "alert": null,
                "status": "automatic",
                "tsunami": 0,
                "sig": 81,
                "net": "ak",
                "code": "15455166",
                "ids": ",ak15455166,",
                "sources": ",ak,",
                "types": ",geoserve,origin,",
                "nst": null,
                "dmin": null,
                "rms": 0.63,
                "gap": null,
                "magType": "ml",
                "type": "earthquake",
                "title": "M 2.3 - 35km ENE of Sterling, Alaska"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -150.1903,
                    60.6907,
                    34.1
                ]
            },
            "id": "ak15455166"
        },
        {
            "type": "Feature",
            "properties": {
                "mag": 0.87,
                "place": "11km NE of Coso Junction, CA",
                "time": 1489094766480,
                "updated": 1489095869320,
                "tz": -480,
                "url": "https://earthquake.usgs.gov/earthquakes/eventpage/ci37823368",
                "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/ci37823368.geojson",
                "felt": null,
                "cdi": null,
                "mmi": null,
                "alert": null,
                "status": "reviewed",
                "tsunami": 0,
                "sig": 12,
                "net": "ci",
                "code": "37823368",
                "ids": ",ci37823368,",
                "sources": ",ci,",
                "types": ",geoserve,nearby-cities,origin,phase-data,scitech-link,",
                "nst": 12,
                "dmin": 0.01009,
                "rms": 0.2,
                "gap": 100,
                "magType": "ml",
                "type": "earthquake",
                "title": "M 0.9 - 11km NE of Coso Junction, CA"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -117.8588333,
                    36.108,
                    1.8
                ]
            },
            "id": "ci37823368"
        },
        {
            "type": "Feature",
            "properties": {
                "mag": 0.5,
                "place": "10km NW of West Bishop, California",
                "time": 1489094677830,
                "updated": 1489096322091,
                "tz": -480,
                "url": "https://earthquake.usgs.gov/earthquakes/eventpage/nc72772226",
                "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/nc72772226.geojson",
                "felt": null,
                "cdi": null,
                "mmi": null,
                "alert": null,
                "status": "reviewed",
                "tsunami": 0,
                "sig": 4,
                "net": "nc",
                "code": "72772226",
                "ids": ",nc72772226,",
                "sources": ",nc,",
                "types": ",geoserve,nearby-cities,origin,phase-data,scitech-link,",
                "nst": 4,
                "dmin": 0.08096,
                "rms": 0.04,
                "gap": 192,
                "magType": "md",
                "type": "earthquake",
                "title": "M 0.5 - 10km NW of West Bishop, California"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -118.532,
                    37.4303333,
                    11.16
                ]
            },
            "id": "nc72772226"
        },
        {
            "type": "Feature",
            "properties": {
                "mag": 1.2,
                "place": "4km SE of The Geysers, California",
                "time": 1489094146650,
                "updated": 1489095003043,
                "tz": -480,
                "url": "https://earthquake.usgs.gov/earthquakes/eventpage/nc72772221",
                "detail": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/detail/nc72772221.geojson",
                "felt": null,
                "cdi": null,
                "mmi": null,
                "alert": null,
                "status": "automatic",
                "tsunami": 0,
                "sig": 22,
                "net": "nc",
                "code": "72772221",
                "ids": ",nc72772221,",
                "sources": ",nc,",
                "types": ",geoserve,nearby-cities,origin,phase-data,scitech-link,",
                "nst": 7,
                "dmin": 0.01974,
                "rms": 0.04,
                "gap": 173,
                "magType": "md",
                "type": "earthquake",
                "title": "M 1.2 - 4km SE of The Geysers, California"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [
                    -122.7174988,
                    38.7535019,
                    1.19
                ]
            },
            "id": "nc72772221"
        }
    ],
    "bbox": [
        -155.2298279,
        19.3826675,
        1.19,
        -117.8588333,
        61.0329,
        115.7
    ]
}        
EOF
            ,
            true
        );

    }

    public static  function getCollectionOneElement()
    {
        return json_decode(
            <<<EOF
    {
    "type": "FeatureCollection",
    "metadata": {
        "generated": 1489097569000,
        "url": "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_hour.geojson",
        "title": "USGS All Earthquakes, Past Hour",
        "status": 200,
        "api": "1.5.6",
        "count": 6
    },
    "features": [
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
    ],
    "bbox": [
        -155.2298279,
        19.3826675,
        1.19,
        -117.8588333,
        61.0329,
        115.7
    ]
}        
EOF
            ,
            true
        );

    }
}