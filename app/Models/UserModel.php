<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {

    public function getCategoryData()
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('CategoryDetail');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }

    public function getItemCategoryWise($cid)
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('ItemDetail');
        $builder->where('CategoryID',$cid);
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
}
?>