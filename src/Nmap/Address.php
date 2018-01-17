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
 * @author Dany Maillard <danymaillard93b@gmail.com>
 *         Jens Reinemuth <jens@reinemuth.rocks>
 *
 */
class Address
{
    public const TYPE_IPV4 = 'ipv4';
    public const TYPE_MAC = 'mac';

    private $address;
    private $type;
    private $vendor;

    public function __construct(string $address, string $type = self::TYPE_IPV4, string $vendor = '')
    {
        $this->address = $address;
        $this->type = $type;
        $this->vendor = $vendor;
    }

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getVendor() : string
    {
        return $this->vendor;
    }
}
