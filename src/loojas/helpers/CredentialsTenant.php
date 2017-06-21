<?php 

namespace Loojas\Helpers;

use Loojas\Helpers\GuidProvider;

class CredentialsTenant
{

    private $guid;

    public function __construct()
    {    
        $this->guid = new GuidProvider();
    }
   
    /**
     *
     * This function will return a Random Database
     *
     * @return type string
     */
    public function getUser()
    {
        return sprintf('_%s_user', $this->random() );
    }

    /**
     *
     * This function will return a Random User Database
     *
     * @return type string
     */
    public function getDatabase()
    {
        return sprintf('_%s', $this->random() );
    }

    private function random()
    {    
        return mb_strtolower( end( explode('-', $this->guid->getGUID()) ), 'UTF-8' );
    }

}
