<?php 

namespace Loojas\Helpers;

/**
 * Class CredentialsTenant
 * @package Loojas\Helpers
 */
class CredentialsTenant
{

    /**
     * @var GuidProvider
     */
    private $guid;

    /**
     * CredentialsTenant constructor.
     */
    public function __construct()
    {    
        $this->guid = new GuidProvider();
    }
   
    /**
     * This function will return a Random Database
     *
     * @return string
     */
    public function getUser()
    {
        return sprintf('_%s_user', $this->random() );
    }

    /**
     * This function will return a Random User Database
     *
     * @return string
     */
    public function getDatabase()
    {
        return sprintf('_%s', $this->random() );
    }

    /**
     * @return mixed|string
     */
    private function random()
    {    
        return mb_strtolower( end( explode('-', $this->guid->getGUID()) ), 'UTF-8' );
    }

}
