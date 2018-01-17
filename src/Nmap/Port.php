<?php

/**
 * This file is part of the nmap package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Nmap;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
/**
 * Class Port
 *
 * @package Nmap
 */
class Port
{
    /**
     *
     */
    public const STATE_OPEN   = 'open';

    /**
     *
     */
    public const STATE_CLOSED = 'closed';

    /**
     * @var int
     */
    private $number;

    /**
     * @var
     */
    private $protocol;

    /**
     * @var
     */
    private $state;

    /**
     * @var \Nmap\Service
     */
    private $service;

    /**
     * Port constructor.
     *
     * @param               $number
     * @param               $protocol
     * @param               $state
     * @param \Nmap\Service $service
     */
    public function __construct($number, $protocol, $state, Service $service)
    {
        $this->number   = (int) $number;
        $this->protocol = $protocol;
        $this->state    = $state;
        $this->service  = $service;
    }

    /**
     * @return integer
     */
    public function getNumber() : int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->protocol;
    }

    /**
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }

    /**
     * @return boolean
     */
    public function isOpen() : bool
    {
        return self::STATE_OPEN === $this->state;
    }

    /**
     * @return boolean
     */
    public function isClosed() : bool
    {
        return self::STATE_CLOSED === $this->state;
    }

    /**
     * @return Service
     */
    public function getService() : Service
    {
        return $this->service;
    }
}
