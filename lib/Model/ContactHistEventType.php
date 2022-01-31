<?php
/**
 * ContactHistEventType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;
use \ElasticEmail\ObjectSerializer;

/**
 * ContactHistEventType Class Doc Comment
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactHistEventType
{
    /**
     * Possible values of this enum
     */
    const OPENED = 'Opened';

    const CLICKED = 'Clicked';

    const BOUNCED = 'Bounced';

    const UNSUBSCRIBED = 'Unsubscribed';

    const COMPLAINED = 'Complained';

    const ACTIVATED = 'Activated';

    const TRANSACTIONAL_UNSUBSCRIBED = 'TransactionalUnsubscribed';

    const MANUAL_STATUS_CHANGE = 'ManualStatusChange';

    const MANUAL_CONSENT_TRACKING_CHANGE = 'ManualConsentTrackingChange';

    const ACTIVATION_SENT = 'ActivationSent';

    const JOURNEY_STARTED = 'JourneyStarted';

    const JOURNEY_STEP_PROCESSED = 'JourneyStepProcessed';

    const JOURNEY_FINISHED = 'JourneyFinished';

    const DELETED = 'Deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPENED,
            self::CLICKED,
            self::BOUNCED,
            self::UNSUBSCRIBED,
            self::COMPLAINED,
            self::ACTIVATED,
            self::TRANSACTIONAL_UNSUBSCRIBED,
            self::MANUAL_STATUS_CHANGE,
            self::MANUAL_CONSENT_TRACKING_CHANGE,
            self::ACTIVATION_SENT,
            self::JOURNEY_STARTED,
            self::JOURNEY_STEP_PROCESSED,
            self::JOURNEY_FINISHED,
            self::DELETED
        ];
    }
}


