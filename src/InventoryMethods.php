<?php

namespace Linnworks;

use Linnworks\classes\StockLocation;

/**
 * InventoryMethods class.
 * 
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class InventoryMethods extends BaseMethods
{

    /**
     * @param string $sessionToken
     * @param string $sessionServer
     * @return StockLocation[]
     */
    public static function getStockLocations($sessionToken, $sessionServer)
    {
        return static::getObjectArrayResponse(StockLocation::className(), 'Inventory/GetStockLocations', '', $sessionToken, $sessionServer);
    }

}
