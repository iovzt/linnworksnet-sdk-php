<?php

namespace Linnworks\classes;

/**
 * ChannelDetails class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class ChannelDetails extends Object
{

    /**
     * @var int
     */
    public $linksCount;

    /**
     * @var InventoryListingTemplate[] 
     */
    public $templates;

    /**
     * @var FieldTypes[] 
     */
    public $changes;

    /**
     * @var boolean 
     */
    public $containsChanges;

}
