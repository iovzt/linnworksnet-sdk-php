<?php

namespace Linnworks;

use Linnworks\classes\PortionResult;
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

    /**
     * @param array $data
     * @param string $sessionToken
     * @param string $sessionServer
     * @return PortionResult
     */
    public static function getInventoryItems(Array $data, $sessionToken, $sessionServer)
    {
        return static::getObjectResponse(PortionResult::className(), 'Inventory/GetInventoryItems', $data, $sessionToken, $sessionServer);
    }

}
