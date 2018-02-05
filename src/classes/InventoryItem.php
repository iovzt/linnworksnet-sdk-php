<?php

namespace Linnworks\classes;

/**
 * InventoryItem class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class InventoryItem extends Object
{

    /**
     * Guid
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $sku;

    /**
     * @var float
     */
    public $weight;

    /**
     * @var float
     */
    public $dimHeight;

    /**
     * @var float
     */
    public $dimWidth;

    /**
     * @var float
     */
    public $dimDepth;

    /**
     * @var string
     */
    public $title;

    /**
     * @var float
     */
    public $retailPrice;

    /**
     * @var float
     */
    public $purchasePrice;

    /**
     * @var string
     */
    public $barcode;

    /**
     * Available quantity
     * @var int
     */
    public $available;

    /**
     * @var int
     */
    public $minimumLevel;

    /**
     * Currently in open orders
     * @var int
     */
    public $inOrder;

    /**
     * @var int
     */
    public $stockLevel;

    /**
     * @var float
     */
    public $stockValue;

    /**
     * Due to come in purchase orders
     * @var int
     */
    public $due;

    /**
     * If stock levels tracked or not
     * @var boolean
     */
    public $tracked;

    /**
     * @var string
     */
    public $binRack;

    /**
     * Guid
     * @var string 
     */
    public $category;

    /**
     * If product is composite parent
     * @var boolean
     */
    public $isComposite;

    /**
     * @var boolean
     */
    public $isArchived;

    /**
     * URL of an image stored on LW server
     * @var string
     */
    public $image;

    /**
     *
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $modifiedDate;

    /**
     * Byte
     * @var int
     */
    public $batchType;

    /**
     * @var boolean
     */
    public $serialNumberScanRequired;

    /**
     * @var boolean
     */
    public $batchNumberScanRequired;

    /**
     * @var boolean
     */
    public $hasBatches;

    /**
     * @var string
     */
    public $variationGroupName;

    /**
     * @var InventoryItem[]
     */
    public $products;

    /**
     * @var ChannelDetails[]
     */
    public $channels;

    /**
     * @var int
     */
    public $totalChangedProducts;

    /**
     * @var boolean
     */
    public $containsChanges;

}
