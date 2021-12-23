<?php
namespace App\Controllers;

use App\Models\AddItemsM;
use App\Models\AdminHomeM;
class AdminHomeC extends BaseController {

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $obj = new AdminHomeM();
        $result['itemdata'] = $obj->getItem();
        echo view('AdminHomeV',$result);
    }

    public function edit($id)
    {
       // echo "on click ID=".$id;
        $obj = new AdminHomeM();
        $result['itemdata'] = $obj->FetchById($id);
       // echo "fetch ID data  = ".$result['itemdata'];
        echo view('AddItemsV',$result);
    }

    public function delete($id)
    {
       // echo "on click ID=".$id;
        $obj = new AdminHomeM();
        $obj->DeleteItem($id);

       // echo "fetch ID data  = ".$result['itemdata'];
        $result['itemdata'] = $obj->getItem(); 
        echo view('AdminHomeV',$result);
    }
}
?>