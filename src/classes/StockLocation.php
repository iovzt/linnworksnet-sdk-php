<?php

namespace Linnworks\classes;

/**
 * StockLocation class.
 * 
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class StockLocation extends Object
{

    /**
     * Location ID
     * 
     * @var string
     */
    public $stockLocationId;

    /**
     * Location name
     * 
     * @var string
     */
    public $locationName;

    /**
     * If location is a fulfilment center
     * 
     * @var boolean
     */
    public $isFulfillmentCenter;

    /**
     * Location tag
     * 
     * @var string
     */
    public $locationTag;

}
