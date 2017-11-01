<?php

namespace Linnworks\classes;

/**
 * Filter class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class Filter extends Object
{

    /**
     * @var string
     */
    public $filterName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var array
     */
    public $filterNameExact;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $conditionDisplayName;

    /**
     * @var string
     */
    public $value;

}
