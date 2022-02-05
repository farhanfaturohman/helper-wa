<?php

/**
 * Authentication.php
 *
 * @category Class
 * @package  farhanfaturohman\WAQiscus
 *
 * @author   Farhan Faturohman<farhanfaturohman.mail@gmail.com>
 */

namespace farhanfaturohman\WAQiscus;

/**
 * Class Authentication
 *
 * @category Class
 * @package  farhanfaturohman\WAQiscus
 *
 * @author   Farhan Faturohman<farhanfaturohman.mail@gmail.com>
 */
class Authentication
{
    /**
     * Required parameters for Get Token.
     *
     * @var array
     */
    private static $getTokenRequiredParams = [
        'email',
        'password'
    ];

    /**
     * Required parameter types for Get Token.
     *
     * @var array
     */
    private static $getTokenTypeParams = [
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Get Qiscus token.
     *
     * @param   string  $appId
     * @param   array   $params
     *
     * @return object
     *
     * @throws \TypeError
     * @throws \ArgumentCountError
     */
    public static function getToken(string $appId, array $params): object
    {
        Validator::validateRequirement(self::$getTokenRequiredParams, $params)->validateType(self::$getTokenTypeParams, $params);

        return Api::sendRequest('AUTHENTICATION', $appId, $params);
    }
}
