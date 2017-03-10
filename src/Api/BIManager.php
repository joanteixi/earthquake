<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 10/3/17
 * Time: 21:58
 */

namespace Api;


use GuzzleHttp\Client;

/**
 * Class BIApi that send the info to the BI.
 * @package Api
 */
class BIManager
{
    const DEFAULT_KEY = 'qRQXN7i2hgRhqWEPwnNxQ3RmeTflyPwVTRHIC';
    const DEFAULT_URL = 'https://api.powerbi.com/beta/29e7636a-66c2-42da-a40b-1d46772edea4/datasets/afb6f7c1-8e39-4d3d-8885-2716b345c4a9/rows';


    /** @var Client */
    protected $client;

    /** @var  String */
    protected $baseUrl;

    /** @var */
    protected $key;


    /**
     * BIManager constructor.
     * @param Client $client
     * @param String $url
     * @param String $key
     */
    public function __construct($url, $key = self::DEFAULT_KEY)
    {
        $this->client = new Client();
        $this->baseUrl = $url;
        $this->key = $key;
    }

    /**
     * @param  $sendObject
     */
    public function send(\Iterator $sendObject)
    {
        $toSend = [];
        foreach ($sendObject as $earthquake) {
            $toSend[] = $this->map($earthquake);
        }

        try {
            $response = $this->postData($toSend);
            return $response;

        } catch (\Exception $e) {
            //TODO write in log
            throw $e;
        }
    }

    public function map(Earthquake $earthquake)
    {
        return array(
            'magnitud' => $earthquake->getMagnitude(),
            'lat'      => $earthquake->getLat(),
            'lng'      => $earthquake->getLng(),
            'place'    => $earthquake->getPlace(),
            'time'     => $earthquake->getTime()->format('Y-m-d H:i:s')
        );
    }

    public function postData($jsonArray)
    {
        $r = $$this->client->request(
            'POST',
            $this->baseUrl,
            [
                'query' => ['key' => $this->key],
                'json'  => json_encode($jsonArray)
            ]
        );

        return $r;


    }


}