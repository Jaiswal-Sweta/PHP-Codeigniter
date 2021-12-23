<?php
namespace App\Controllers;
use App\Models\AddItemsM;
class AddItemsC extends BaseController {
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        echo view('AddItemsV');
    }

    public function insert()
    {
        echo "insert....fun.";
        echo "Insert button click";
        $CategoryID = $this->request->getVar('category');
        $ItemName = $this->request->getVar('txtItemName'); 
        $Price = $this->request->getVar('txtPrice');
        $Quantity = $this->request->getVar('txtQuantity');
        $Image = $this->request->getFile('FileUpload1');
        $btn = $this->request->getVar('submit');
        if($btn=='Add Items')
        {
            echo "insert in if";
            if($Image->isValid() && (!$Image->hasMoved()))
            {
                $newfilename = $Image->getRandomName();
                if($Image->move('upload/',$newfilename)){
                $img = 'upload/'.$newfilename;
                $data1 = [
                        'ItemName' => $ItemName,
                        'Price' => $Price,
                        'Quantity' => $Quantity,
                        'CategoryID' => $CategoryID,
                        'Image' => $img
                        ];
                        echo "Uploaded or insered..! in controller";
                        $obj = new AddItemsM();
                        $obj->InsertItem($data1);
                        }
            }else{
                    echo "FIle is not valid";
            }
        }
        if($btn == 'Update Items')
        {
            echo "Update...";
            $ItemID = $this->request->getVar('hItemID');
            if($Image->isValid() && (!$Image->hasMoved()))
            {
                $newfilename = $Image->getRandomName();
                if($Image->move('upload/',$newfilename)){
                $img = 'upload/'.$newfilename;
                $data1 = [
                        'ItemID' => $ItemID,
                        'ItemName' => $ItemName,
                        'Price' => $Price,
                        'Quantity' => $Quantity,
                        'CategoryID' => $CategoryID,
                        'Image' => $img
                        ];
                        echo "Data1 = ";
                        print_r($data1);
                        echo "Uploaded or updated..! in controller";
                        $obj = new AddItemsM();
                        $obj->UpdateItem($data1);
                        }
            }else{
                    echo "FIle is not valid";
            }
        }
    }
}
?>