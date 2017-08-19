<?php

namespace Linnworks;

/**
 * AuthMethods class.
 */
abstract class AuthMethods extends BaseMethods
{

    /**
     * Returns current application subscription profile information for a given application for a specific user. 
     * You can use this method to get the current application subscription after AuthorizedByApplication returned a session. 
     * The session will contain Id, this is the UserId you need to supply in the call.
     * If there are no current subscriptions for the application for the user. The method will return null (nothing)
     * 
     * @param string $applicationId
     * @param string $applicationSecret
     * @param string $token
     * @return array
     */
    public static function authorizeByApplication($applicationId, $applicationSecret, $token)
    {
        return static::getJsonResponse('Auth/AuthorizeByApplication', [
                    'applicationId' => $applicationId,
                    'applicationSecret' => $applicationSecret,
                    'token' => $token
        ]);
    }

    /**
     * @return string
     */
    public static function getServerUTCTime()
    {
        return static::getResponse('Auth/GetServerUTCTime', '');
    }

}
