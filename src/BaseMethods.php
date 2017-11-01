<?php

namespace Linnworks;

use Exception;
use Linnworks\exceptions\BadResponseException;
use Linnworks\exceptions\UnauthorizedException;

/**
 * BaseMethods class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
abstract class BaseMethods
{

    /**
     * @var string
     */
    protected static $__lastRequest;

    /**
     * @var string
     */
    protected static $__lastResponse;

    /**
     * @var array
     */
    protected static $__lastResponseHeaders = [];

    /**
     * @return boolean
     */
    public static function __hasLastRequest()
    {
        return (self::$__lastRequest !== NULL);
    }

    /**
     * @return string
     */
    public static function __getLastRequest()
    {
        return trim(self::$__lastRequest, "\r\n");
    }

    /**
     * @return string
     */
    public static function __getLastResponse($headers = TRUE)
    {
        return trim(($headers ? implode("\n", self::$__lastResponseHeaders) . "\n" : '') .
                ((self::$__lastResponse) ? self::$__lastResponse : NULL), "\r\n");
    }

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
        $headers = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8\r\n";
        $headers .= "User-Agent: Linnworks PHP API SDK \r\n";
        $headers .= "Referer: https://www.linnworks.net/ \r\n";
        $headers .= "Content-Length: " . strlen($data) . "\r\n";
        $headers .= "Authorization: " . $token . "\r\n";
        $opts = [
            'http' => [
                'ignore_errors' => TRUE,
                'method' => "POST",
                'header' => $headers,
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
        self::$__lastRequest = "POST $url\n$headers\n\n$data";
        self::$__lastResponse = @file_get_contents($url, FALSE, $context);
        self::$__lastResponseHeaders = $http_response_header;

        // handle errors
        if (isset(self::$__lastResponseHeaders[0]) &&
                stripos(self::$__lastResponseHeaders[0], '401 Unauthorized') !== FALSE) {

            throw new UnauthorizedException();
        }

        return self::$__lastResponse;
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
        $response = static::getJsonResponse($method, $data, $token, $server);
        if (is_object($response)) {

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
        $response = static::getJsonResponse($method, $data, $token, $server);
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

            if (is_int(key($data))) {

                return json_encode($data);
            } else {

                $arr = [];
                foreach ($data as $key => $value) {

                    $arr[] = $key . '=' . static::prepareRequestData($value);
                }
                return implode('&', $arr);
            }
        } elseif (is_object($data)) {

            if (method_exists($data, '__toString')) {

                return (string) $data;
            } else {

                return json_encode($data);
            }
        } elseif (is_bool($data)) {

            return !!$data ? 'true' : 'false';
        }
        return $data;
    }

    /**
     * @return string
     */
    public static function className()
    {
        return get_called_class();
    }

}
