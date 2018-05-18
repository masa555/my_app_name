<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
 
 
 
class AppController extends Controller
{  
    public function isAuthorized($user = null){
       return true;
      }
 public $helpers = [
    'Flash' => ['className' => 'Bootstrap.BootstrapFlash'],
    'Form' => ['className' => 'Bootstrap.BootstrapForm'],
    'Html' => ['className' => 'Bootstrap.BootstrapHtml'],
    'Modal' => ['className' => 'Bootstrap.BootstrapModal'],
    'Navbar' => ['className' => 'Bootstrap.BootstrapNavbar'],
    'Panel' => ['className' => 'Bootstrap.BootstrapPanel'],
    'Paginator' => ['className' => 'Bootstrap.BootstrapPaginator'],
];
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
        
       $this->loadComponent('Auth',[
      'authorize' => 'Controller',
	  'authenticate' => [
		'Form' => [
			'fields' => [
				'username' => 'email',
				'password' => 'password',
			]
		]
	],
	'loginAction' => [
		'controller' => 'Users',
		'action' => 'login'
	]

]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */    //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');

    }
   
}

 