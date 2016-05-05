<?php

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController {

    protected $albumTable;

    public function getAlbumTable() {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }

    public function indexAction() {
       // $data = $this->getAlbumTable()->fetchAll();
        return new ViewModel(
                array(
            'albums' => $this->getAlbumTable()->fetchAll(),
             //       'albums' => $data,
                )
        );
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
