<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

        public function checkLogin($where)
        {
            $query = $this->db->get_where('users', $where)->num_rows();
             //get where itu select tapi kalo ada kondisinya kalo get select all
             // num rows itu untuk mengetahui berapa jumlah baris yang ter select

            return $query;
        }

}

/* End of file Login_model.php */

?>