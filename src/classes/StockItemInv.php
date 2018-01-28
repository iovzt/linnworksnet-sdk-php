<?php

namespace Linnworks\classes;

/**
 * StockItemInv class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class StockItemInv extends Object
{

    /**
     * @var string
     */
    public $variationGroupName;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $inOrder;

    /**
     * @var int
     */
    public $due;

    /**
     * @var int
     */
    public $minimumLevel;

    /**
     * @var int
     */
    public $available;

    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var boolean
     */
    public $isCompositeParent;

    /**
     * SKU
     * @var string
     */
    public $itemNumber;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $barcodeNumber;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var boolean
     */
    public $isBatchedStockType;

    /**
     * @var float
     */
    public $purchasePrice;

    /**
     * @var float
     */
    public $retailPrice;

    /**
     * @var float
     */
    public $taxRate;

    /**
     * @var string
     */
    public $postalServiceId;

    /**
     * @var string
     */
    public $postalServiceName;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $packageGroupId;

    /**
     * @var string
     */
    public $packageGroupName;

    /**
     * @var float
     */
    public $height;

    /**
     * @var float
     */
    public $width;

    /**
     * @var float
     */
    public $depth;

    /**
     * @var float
     */
    public $weight;

    /**
     * @var int
     */
    public $inventoryTrackingType;

    /**
     * @var boolean
     */
    public $batchNumberScanRequired;

    /**
     * @var boolean
     */
    public $serialNumberScanRequired;

    /**
     * @var string
     */
    public $stockItemId;

}
