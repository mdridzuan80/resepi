<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        if(strcmp($this->input->method(TRUE),"POST") == 0)
        {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            if($this->authenticate->login($username, $password))
            {
                redirect("/welcome");
            }
        }
        renderView("layout/login");
    }

    public function logout()
    {
        $this->authenticate->logout();
        redirect("/");
    }
}
