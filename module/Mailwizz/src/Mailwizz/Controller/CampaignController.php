<?php
/**
 * Created by PhpStorm.
 * User: truongly
 * Date: 03/07/2015
 * Time: 17:01
 */

namespace Mailwizz\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use mailwizz\MailWizzApiBase;
use mailwizz\Config;
use mailwizz\Endpoint\Campaigns;


class CampaignController extends AbstractActionController
{

    public function __construct(){

        //parent::__call();
        $config = $this->getServiceLocator()->get('config');
        $config = new Config($config['mailwizz_api']);
        MailWizzApiBase::setConfig($config);
    }

    public function indexAction()
    {
        /*$campaigns = new Campaigns();
        var_dump($campaigns->getCampaigns());*/

        return $this->response;
    }
}