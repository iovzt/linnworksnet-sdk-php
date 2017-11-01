<?php

namespace Linnworks\classes;

/**
 * PortionResult class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class PortionResult extends Object
{

    /**
     * @var array
     */
    public $items;

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var int
     */
    public $startIndex;

    /**
     * Guid
     * @var string
     */
    public $token;

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return intval($this->totalItems);
    }

    /**
     * @return boolean
     */
    public function hasItems()
    {
        return count($this->items);
    }

    /**
     * @param string $className
     * @return Object[]
     */
    public function getItems($className)
    {
        return $className::populate($this->items);
    }

}
