<?php
namespace App\Controllers;

use App\Models\UserModel;

class UserDashboardC extends BaseController {

    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        echo view('layouts\UserDashboardV');
    }

    public function ViewHome()
    {
        $obj = new UserModel();
        $result['CategoryData'] = $obj->getCategoryData();
        $cid = $this->request->getVar('catgeory');
        if($this->request->getMethod()=="post")
        {
            $btn = $this->request->getVar('submit');
            if($btn == "Search")
            {
                $obj = new UserModel();
                $result['itemdata'] = $obj->getItemCategoryWise($cid);
                echo view('UserHomeV',$result);
            }
        }
        else
        {
            echo view('UserHomeV',$result);
        }
    }

    public function AddToCart($id,$name,$qty)
    {
        echo "id = ",$id;
        echo "Name = ",$name;
        echo "Qty = ",$qty;
    }

}
?>