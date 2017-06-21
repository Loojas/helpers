<?php 

namespace Loojas\Helpers;

class GuidProvider 
{
    /**
     * @type string
     */
    private $uuid;

    public function __construct()
    {
        $uuid = $this->getGUID();

        $this->uuid = $uuid;

        return $uuid;
    }

    public function __toString()
    {
        return $this->uuid;
    }

    /**
     *
     * This function will return a GUID
     *
     * @return type string
     */
    public function getGUID()
    {

        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', 
            mt_rand(0, 65535), 
            mt_rand(0, 65535), 
            mt_rand(0, 65535), 
            mt_rand(16384, 20479), 
            mt_rand(32768, 49151), 
            mt_rand(0, 65535), 
            mt_rand(0, 65535), 
            mt_rand(0, 65535)
        );
    }
}
