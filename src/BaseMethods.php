<?php

namespace Linnworks;

use Exception;
use Linnworks\exceptions\BadResponseException;

/**
 * BaseMethods class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
abstract class BaseMethods
{

    /**
     * @param string $method
     * @param string $data
     * @param string $token
     * @param string $server
     * @return string
     */
    protected static function getResponse($method, $data, $token = NULL, $server = NULL)
    {
        $data = static::prepareRequestData($data);
        $opts = [
            'http' => [
                'method' => "POST",
                'header' => "Content-Type: application/x-www-form-urlencoded; charset=UTF-8\r\n" .
                "User-Agent: Linnworks PHP API SDK \r\n" .
                "Referer: https://www.linnworks.net/ \r\n" .
                "Content-Length: " . strlen($data) . "\r\n" .
                "Authorization: " . $token . "\r\n",
                'content' => $data
            ]
        ];

        $url = "";
        if (!empty($token)) {

            $url = $server . '/api/' . $method;
        } else {

            $url = 'https://api.linnworks.net/api/' . $method;
        }

        $context = stream_context_create($opts);
        $response = file_get_contents($url, FALSE, $context);

        return $response;
    }

    /**
     * @param string $method
     * @param string $data
     * @param string $token
     * @param string $server
     * @return array
     */
    protected static function getJsonResponse($method, $data, $token = NULL, $server = NULL)
    {
        $response = static::getResponse($method, $data, $token, $server);
        $json = json_decode($response);
        if (json_last_error() !== JSON_ERROR_NONE) {

            throw new BadResponseException($response);
        }
        return $json;
    }

    /**
     * @param string $className
     * @param string $method
     * @param string $data
     * @param string $token
     * @param string $server
     * @return array
     */
    protected static function getObjectResponse($className, $method, $data, $token = NULL, $server = NULL)
    {
        $response = static::getResponse($method, $data, $token, $server);
        if (is_array($response)) {

            return $className::populateOne($response);
        }
        throw new BadResponseException($response);
    }

    /**
     * @param string $className
     * @param string $method
     * @param string $data
     * @param string $token
     * @param string $server
     * @return array
     */
    protected static function getObjectArrayResponse($className, $method, $data, $token = NULL, $server = NULL)
    {
        $response = static::getResponse($method, $data, $token, $server);
        if (is_array($response)) {

            return $className::populate($response);
        }
        throw new BadResponseException($response);
    }

    /**
     * @param mixed $data
     * @return string
     * @throws Exception
     */
    protected static function prepareRequestData($data)
    {
        if (is_array($data)) {

            $arr = [];
            foreach ($data as $key => $value) {

                $arr[] = $key . '=' . static::prepareRequestData($value);
            }
            return implode('&', $arr);
        } elseif (is_object($data)) {

            if (method_exists($data, '__toString')) {

                return (string) $data;
            } else {

                return json_encode($data);
            }
        } elseif (is_string($data)) {

            return $data;
        } else {

            throw new Exception('Data can not be converted for request.');
        }
    }

}
