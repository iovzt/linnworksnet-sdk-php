<?php

namespace Linnworks\classes;

/**
 * StockItemChannelSKU class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class StockItemChannelSKU extends Object
{

    /**
     * @var string
     */
    public $channelSKURowId;

    /**
     * @var string
     */
    public $sku;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $subSource;

    /**
     * @var string
     */
    public $updateStatus;

    /**
     * @var string
     */
    public $channelReferenceId;

    /**
     * @var string
     */
    public $lastUpdate;

    /**
     * @var int
     */
    public $maxListedQuantity;

    /**
     * @var int
     */
    public $endWhenStock;

    /**
     * @var int
     */
    public $submittedQuantity;

    /**
     * @var int
     */
    public $listedQuantity;

    /**
     * @var float
     */
    public $stockPercentage;

    /**
     * @var boolean
     */
    public $ignoreSync;

    /**
     * @var boolean
     */
    public $ignoreSyncMultiLocation;

    /**
     * @var boolean
     */
    public $isMultiLocation;

    /**
     * @var string
     */
    public $stockItemId;

}
