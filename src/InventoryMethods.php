<?php

namespace Linnworks;

use Linnworks\classes\Channel;
use Linnworks\classes\InventoryView;
use Linnworks\classes\PortionResult;
use Linnworks\classes\StockItemChannelSKU;
use Linnworks\classes\StockItemInv;
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
     * @return Channel[]
     */
    public static function getChannels($sessionToken, $sessionServer)
    {
        return self::getObjectArrayResponse(Channel::className(), 'Inventory/GetChannels', '', $sessionToken, $sessionServer);
    }

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
     * @param string $inventoryItemId
     * @param string $sessionToken
     * @param string $sessionServer
     * @return StockItemInv
     */
    public static function getInventoryItemById($inventoryItemId, $sessionToken, $sessionServer)
    {
        $data = [
            'id' => $inventoryItemId
        ];
        return self::getObjectResponse(StockItemInv::className(), 'Inventory/GetInventoryItemById', $data, $sessionToken, $sessionServer);
    }

    /**
     * @param InventoryView $view
     * @param array $stockLocationIds
     * @param int $startIndex
     * @param int $itemsCount
     * @param boolean $preloadChilds
     * @param string $sessionToken
     * @param string $sessionServer
     * @return PortionResult
     */
    public static function getInventoryItems(InventoryView $view, Array $stockLocationIds, $startIndex, $itemsCount, $preloadChilds, $sessionToken, $sessionServer)
    {
        $data = [
            'view' => $view,
            'stockLocationIds' => $stockLocationIds,
            'startIndex' => intval($startIndex),
            'itemsCount' => intval($itemsCount),
            'preloadChilds' => boolval($preloadChilds)
        ];
        return static::getObjectResponse(PortionResult::className(), 'Inventory/GetInventoryItems', $data, $sessionToken, $sessionServer);
    }

    /**
     * @param string $inventoryItemId
     * @param string $sessionToken
     * @param string $sessionServer
     * @return StockItemChannelSKU[]
     */
    public static function getInventoryItemChannelSKUs($inventoryItemId, $sessionToken, $sessionServer)
    {
        $data = [
            'inventoryItemId' => $inventoryItemId
        ];
        return static::getObjectArrayResponse(StockItemChannelSKU::className(), 'Inventory/GetInventoryItemChannelSKUs', $data, $sessionToken, $sessionServer);
    }

}
