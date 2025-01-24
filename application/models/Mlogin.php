<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Mlogin extends CI_Model
{

    function query_validasi_email($email)
    {
        $result = $this->db->query("SELECT * FROM table_user WHERE user_email='$email' LIMIT ");
        return $result;
    }
    function query_valiasi_password($email, $password)
    {
        $result = $this->db->query("SELECT *FROM table_user WHERE user_email= '$email' AND user_password=SHA2('$password', 224) limit 1");
        return $result;
    }
}
