<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\User;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $config = $this->getServiceLocator()->get('config');
        $users = new User($config['db']);
        var_dump($users->getAllUsers());
        return $this->response;
        //return new ViewModel();
    }

    public function addAction()
    {
        $request = $this->getRequest()->getPost('data', null);
        if(!empty($request))
        {
            $data = json_decode($request);
            switch($data->event)
            {
                case 'setLogin':

                    break;
                case 'setCategories':

                    break;
                case 'setCancelOrder':

                    break;

            }
        }
        return $this->response;
    }

}
