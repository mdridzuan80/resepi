<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if( ! $this->authenticate->isLogged())
        {
            redirect("/auth/login");
        }
    }

    public function isPost()
    {
        if(strcmp($this->input->method(TRUE),"POST") == 0)
        {
            return TRUE;
        }
        return FALSE;
    }
}
