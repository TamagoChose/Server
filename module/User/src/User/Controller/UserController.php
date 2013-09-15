<?php

namespace User\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class UserController extends AbstractRestfulController {

    public function get($id) {
     return new JsonModel(array(
            'id' => $id,
            'name' => 'Audéon',
            'lastName' => 'Alexandre'
        ));
     
    }

}