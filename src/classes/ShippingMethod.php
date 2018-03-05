<?php

namespace Linnworks\classes;

/**
 * ShippingMethod class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class ShippingMethod extends Object
{

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var PostageService[]
     */
    public $postalServices;

}
