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
 * Class Service
 *
 * @package Nmap
 */
class Service
{
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $product;

    /**
     * @var
     */
    private $version;

    /**
     * Service constructor.
     *
     * @param $name
     * @param $product
     * @param $version
     */
    public function __construct($name, $product, $version)
    {
        $this->name = $name;
        $this->product = $product;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
}
