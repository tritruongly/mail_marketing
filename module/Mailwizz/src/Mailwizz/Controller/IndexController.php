<?php
/**
 * Created by PhpStorm.
 * User: truongly
 * Date: 03/07/2015
 * Time: 17:00
 */

namespace Mailwizz\Controller;

use Zend\Mvc\Controller\AbstractActionController;
//use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'hello world';
        return $this->response;
    }
}