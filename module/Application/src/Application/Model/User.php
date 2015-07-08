<?php
/**
 * Created by PhpStorm.
 * User: truongly
 * Date: 08/07/2015
 * Time: 14:31
 */

namespace Application\Model;

use Zend\Db\Adapter\Adapter;

class User
{
    protected $adapter;

    public function __construct($config)
    {
        $this->adapter = new Adapter($config);
    }

    public function getAllUsers()
    {
        $sql = 'Select * From website';
        $statement = $this->adapter->query($sql);
        $results = $statement->execute();
        $data = array();
        while($results->next())
        {
            $data[] = $results->current();
        }
        return $data;
    }

}