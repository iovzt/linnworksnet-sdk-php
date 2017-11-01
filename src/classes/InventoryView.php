<?php

namespace Linnworks\classes;

/**
 * InventoryView class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class InventoryView extends Object
{

    /**
     * Guid
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $mode;

    /**
     * ChannelName/Source (e.g. EBAY)
     * @var string
     */
    public $source;

    /**
     * SubSource (e.g. EBAY1)
     * @var string
     */
    public $subSource;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $listing;

    /**
     * @var boolean
     */
    public $showOnlyChanged;

    /**
     * @var string
     */
    public $includeProducts;

    /**
     * @var Filter[]
     */
    public $filters;

    /**
     * @var Column[]
     */
    public $columns;

    /**
     * @var Channel[]
     */
    public $channels;

}
