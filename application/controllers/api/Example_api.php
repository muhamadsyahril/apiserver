<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Example_api extends REST_Controller {
 
    function user_get()
    {
        $data = array('returned: '. $this->get('id'));
        $this->response($data);
    }
     
    function user_post()
    {       
        //$data = array('returned: '. $this->post('id'));
        //$this->response($data);
        var_dump($this->post());
    }
 
    function user_put()
    {       
        $data = array('returned: '. $this->put('id'));
        $this->response($data);
    }
 
    function user_delete()
    {
        $data = array('returned: '. $this->delete('id'));
        $this->response($data);
    }
}