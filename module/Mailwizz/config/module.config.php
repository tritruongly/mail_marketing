<?php
/**
 * Created by PhpStorm.
 * User: truongly
 * Date: 03/07/2015
 * Time: 17:05
 */

return array(
    'router' => array(
        'routes' => array(
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'mailwizz' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/mailwizz',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Mailwizz\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'campaign' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/campaign',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Mailwizz\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Mailwizz\Controller\Index' => 'Mailwizz\Controller\IndexController',
            'Mailwizz\Controller\Campaign' => 'Mailwizz\Controller\CampaignController',
        ),
    ),
    /*'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),*/
);