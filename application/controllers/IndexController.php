<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // parse hosts file
        $filename = APPLICATION_PATH . '/configs/hosts.ini';
        $iniFile  =  parse_ini_file($filename, true);
        if ($iniFile) {
            $this->view->ini = $iniFile;
        } else {
            echo "Parse ini file $filename failed";            
        }
        
     if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
         
            Zend_Debug::dump($formData);
     }
    }     


}

