<?php

/**
 * This is the global runtime configuration for Yves and Generated_Yves_Zed in a development environment.
 */

use SprykerFeature\Shared\Application\ApplicationConfig;
use SprykerFeature\Shared\Acl\AclConfig;
use SprykerFeature\Shared\Session\SessionConfig;
use SprykerFeature\Shared\Log\Config\DefaultLoggerConfig;
use SprykerFeature\Shared\Payone\PayoneConfigConstants;

$config[ApplicationConfig::YVES_SESSION_SAVE_HANDLER] = SessionConfig::SESSION_HANDLER_REDIS;
$config[ApplicationConfig::ZED_SESSION_SAVE_HANDLER] = SessionConfig::SESSION_HANDLER_FILE;

$config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PROTOCOL] = 'tcp';
$config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_HOST] = '127.0.0.1';
$config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PORT] = '10009';

$config[ApplicationConfig::ZED_STORAGE_SESSION_REDIS_PROTOCOL] = $config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PROTOCOL];
$config[ApplicationConfig::ZED_STORAGE_SESSION_REDIS_HOST] = $config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_HOST];
$config[ApplicationConfig::ZED_STORAGE_SESSION_REDIS_PORT] = $config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PORT];

$config[ApplicationConfig::YVES_SESSION_COOKIE_DOMAIN] = $config[ApplicationConfig::HOST_YVES];

$config[ApplicationConfig::JENKINS_BASE_URL] = 'http://' . $config[ApplicationConfig::HOST_ZED_GUI] . ':10007/jenkins';
$config[ApplicationConfig::JENKINS_DIRECTORY] = '/data/shop/development/shared/data/common/jenkins';
$config[ApplicationConfig::TRANSFER_DEBUG_SESSION_FORWARD_ENABLED] = true;

$config[PayoneConfigConstants::PAYONE] = [
    PayoneConfigConstants::PAYONE_CREDENTIALS_ENCODING => 'UTF-8',
    PayoneConfigConstants::PAYONE_CREDENTIALS_KEY => 'oZZfMY6L224Q51jq',
    PayoneConfigConstants::PAYONE_CREDENTIALS_MID => '29250',
    PayoneConfigConstants::PAYONE_CREDENTIALS_AID => '29499',
    PayoneConfigConstants::PAYONE_CREDENTIALS_PORTAL_ID => '2020679',
    PayoneConfigConstants::PAYONE_PAYMENT_GATEWAY_URL => 'https://api.pay1.de/post-gateway/',
    PayoneConfigConstants::PAYONE_REDIRECT_SUCCESS_URL => $config[ApplicationConfig::HOST_YVES] . '/checkout/success/',
    PayoneConfigConstants::PAYONE_REDIRECT_ERROR_URL => $config[ApplicationConfig::HOST_YVES] . '/checkout/index/',
    PayoneConfigConstants::PAYONE_REDIRECT_BACK_URL => $config[ApplicationConfig::HOST_YVES] . '/checkout/regular-redirect-payment-cancellation/',
    PayoneConfigConstants::PAYONE_MODE => '',
];

$config[ApplicationConfig::NAVIGATION_CACHE_ENABLED] = true;

$config[AclConfig::ACL_USER_RULE_WHITELIST][] = [
    'bundle' => 'wdt',
    'controller' => '*',
    'action' => '*',
    'type' => 'allow',
];

$config[ApplicationConfig::PROPEL_DEBUG] = true;

$config[ApplicationConfig::ALLOW_INTEGRATION_CHECKS] = true;
$config[ApplicationConfig::DISPLAY_ERRORS] = true;
$config[ApplicationConfig::ENABLE_APPLICATION_DEBUG] = true;
$config[ApplicationConfig::SET_REPEAT_DATA] = true;
$config[ApplicationConfig::STORE_PREFIX] = 'DEV';

$config[ApplicationConfig::ENABLE_WEB_PROFILER] = true;
$config[ApplicationConfig::SHOW_SYMFONY_TOOLBAR] = true;

$config[DefaultLoggerConfig::DEFAULT_LOG_LEVEL] = Monolog\Logger::INFO;
