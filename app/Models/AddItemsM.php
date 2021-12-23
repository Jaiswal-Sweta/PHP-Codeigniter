<?php
namespace App\Models;
use CodeIgniter\Model;

class AddItemsM extends Model {

    public function InsertItem($value)
    {
        $db=\Config\Database::connect('default');
        $builder = $db->table('ItemDetail');
        $builder->ignore(true)->insert($value);
        //echo "inserted..! in model";
        return;
    }
    public function UpdateItem($value)
    {
        echo "$value = ";
        print_r($value);
        $db=\Config\Database::connect('default');
        $builder = $db->table('ItemDetail');
        $builder->ignore(true)->update($value);
        $builder->where('ItemID',$value['ItemID']); 
        //echo "Updated..! in model";
        return;
    }
}

?>