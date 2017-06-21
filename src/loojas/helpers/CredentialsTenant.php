<?php 

namespace Loojas\Helpers;

use LogicException;

/**
 * Class CredentialsTenant
 * @package Loojas\Helpers
 */
class CredentialsTenant
{

    /**
     * This function will return a Random Database
     *
     * @param int $id_tenant
     * @return string
     */
    public function getUser(int $id_tenant)
    {
        $guid = new GuidProvider();
        return sprintf('_%d%s_user',$id_tenant, $this->randomUser($guid) );
    }

    /**
     * This function will return a Random User Database
     *
     * @param int $id_tenant
     * @return string
     */
    public function getDatabase(int $id_tenant)
    {
        $guid = new GuidProvider();
        return sprintf('_%d%s', $id_tenant, $this->randomDatabase($guid) );
    }

    private function separate($guid)
    {
        return explode('-', $guid );
    }

    /**
     * @param string $guid
     * @return mixed|string
     */
    private function randomDatabase($guid='')
    {
        $exp = $this->separate($guid);
        return mb_strtolower( current( $exp ), 'UTF-8');
    }

    /**
     * @param string $guid
     * @return mixed|string
     */
    private function randomUser($guid='')
    {
        $exp = $this->separate($guid);
        return mb_strtolower( next( $exp ), 'UTF-8');
    }

}
