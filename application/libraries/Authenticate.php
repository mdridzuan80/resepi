<?php
    class Authenticate
    {
        private $CI;

        public function __construct()
        {
            $this->CI =& get_instance();
        }

        public function login($username, $password)
        {
            $this->CI->load->model("muser");
            $user = $this->CI->muser->getUser($username);
            if($user->num_rows())
            {
                if(strcmp($password, $this->CI->encryption->decrypt($user->row()->password))==0)
                {
                    $this->CI->session->set_userdata("isLogged", TRUE);
                    $this->CI->session->set_userdata("userid", $username);
                    return TRUE;
                }
                return FALSE;
            }
            return FALSE;
        }

        public function logout()
        {
            $this->CI->session->unset_userdata(["isLogged","userid"]);

        }

        public function getUserid()
        {
            return $this->CI->session->userid;
        }

        public function isLogged()
        {
            if($this->CI->session->has_userdata("isLogged"))
            {
                if($this->CI->session->isLogged)
                {
                    return TRUE;
                }
                return FALSE;
            }
            return FALSE;
        }
    }
