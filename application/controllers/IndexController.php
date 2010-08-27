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
        $hostsFile = file_get_contents('/etc/hosts');
        $lines = explode("\n", $hostsFile);
        echo "<pre>";
        $out = array();
        foreach ($lines as $line) {
//            echo $line."\n";
            preg_match('/^(#?\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b)\s(.*)/', $line, $matches);            
            if (!empty($matches[1])) {
                $out[$matches[1]] = trim($matches[2]);
            }
        }
        
        print_r($out);
        
    }


}

