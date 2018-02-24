<?php

namespace Linnworks;

/**
 * OrdersMethods class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
class OrdersMethods extends BaseMethods
{

    /**
     * @param array $orders
     * @param string $location
     * @param string $sessionToken
     * @param string $sessionServer
     * @return array
     */
    public static function createOrders(Array $orders, $location, $sessionToken, $sessionServer)
    {
        $data = [
            'orders' => $orders,
            'location' => $location
        ];
        return self::getJsonResponse('Orders/CreateOrders', $data, $sessionToken, $sessionServer);
    }

    /**
     * @param string $orderId
     * @param array $info
     * @param string $sessionToken
     * @param string $sessionServer
     * @return array
     */
    public static function setOrderShippingInfo($orderId, Array $info, $sessionToken, $sessionServer)
    {
        $data = [
            'orderId' => $orderId,
            'info' => $info
        ];
        return self::getJsonResponse('Orders/SetOrderShippingInfo', $data, $sessionToken, $sessionServer);
    }

}
