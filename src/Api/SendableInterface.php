<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 10/3/17
 * Time: 22:11
 */

namespace Api;


interface SendableInterface
{
    /**
     * Convert object to something that can be sended
     *
     * @return mixed
     */
    public function toJson();

}