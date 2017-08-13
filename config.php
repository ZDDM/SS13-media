<?php
define('ROOT_PATH', dirname(__file__));
class Config
{
    const ROOT_PATH = ROOT_PATH;

    const WEBROOT_PATH = "/media";
    const CACHE_PATH = "/cache";
    const POOL_PATH = '/files';

    const ROOT_URL = "http://yourwebsitegoeshere.moe/media";
    const API_KEY = "SECRET DO NOT SHARE";

    public static function getWebRoot()
    {
        return self::WEB_ROOT;
    }

    public static function getPoolDir()
    {
        return self::ROOT_PATH . self::POOL_PATH;
    }

    public static function getCacheDir()
    {
        return self::ROOT_PATH . self::CACHE_PATH;
    }

}
