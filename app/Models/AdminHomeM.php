<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminHomeM extends Model {

    public function getItem()
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('ItemDetail');
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function FetchById($id)
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('ItemDetail');
        $builder->where('ItemID',$id);
        $query = $builder->get();
        $result = $query->getResult();
        //echo "Fetch record in home";
        //print_r($result);
        return $result;
    }
    public function DeleteItem($id)
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('ItemDetail');
        $builder->where('ItemID',$id); 
        $builder->delete();
        //echo "deleted..! in model";
        return;
    }
}
?>