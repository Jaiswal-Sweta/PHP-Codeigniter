<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model {

    public function Valid_User($uname)
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('LoginDetail');
        $builder->select('Username,Password,Usertype');
        $builder->where('Username',$uname);
        $query=$builder->get();
        if(count($query->getResultArray())==1)
        {
            return $query->getRowArray();
        }
        else
        {
            return false;
        }
    }
}

?>