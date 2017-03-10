<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 10/3/17
 * Time: 21:59
 */

namespace Api\Tests;


use Api\BIManager;
use Api\SourceData;
use Tests\Api\SourceDataHelper;

class BIManagerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldSendData()
    {

        $expectedToSend = array(
            array(
                'place'    => '5km S of Volcano, Hawaii',
                'magnitud' => 2.3300000000000001,
                'lat'      => -155.2298279,
                'lng'      => 19.3826675,
                'time'     => '2017-03-09 22:01:02'
            )
        );

        $BIManager = $this->getMockBuilder(BIManager::class)
            ->setConstructorArgs(['http://localhost', '1234'])
            ->setMethods(['postData'])
            ->getMock();
        $BIManager->expects($this->exactly(1))
            ->method('postData')
            ->with($expectedToSend);

        $sourceData = new SourceData();
        $sourceData->getData(SourceDataHelper::getCollectionOneElement());

        $response = $BIManager->send($sourceData);


    }
}
