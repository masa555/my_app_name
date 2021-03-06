<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 *
 * @method \App\Model\Entity\Comment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserpolicyController extends AppController
{  
    public function index()
    {
        $this->set(compact('userpolicy'));
    }
     public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['userpolicy','index']);
    }
    
}
