<?php
namespace App\Controllers;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public $obj;
    public $session;
    public function __construct()
    {
        helper(['form','Valid']);
        //helper('form');
        $this->obj = new LoginModel();
        $this->session = session();
    }
    public function index()
    {
        
        echo view('LoginView');
    }

    public function CheckUser()
    {
        $data['validation'] = null;
        $rules = [
            'txtusername' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Required Username'
                ]
            ],
            'txtpassword' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Required Password'
                ]
            ]    
        ];
       if($this->validate($rules))
        {
            $uname = $this->request->getVar('txtusername');
            $password = $this->request->getVar('txtpassword');
            $userdata =$this->obj->Valid_User($uname);
    
            if($userdata)
            {
                if(strcmp($password,$userdata['Password'])==0)
                {
                    if($userdata['Usertype']=="Admin")
                    {
                        $this->session->set('User',$userdata['Username']);
                        //echo "Session name =".$this->session->get('User');
                        return redirect()->to(site_url().'\admindashboardc');
                    }

                    if($userdata['Usertype']=="User")
                    {
                        $this->session->set('User',$userdata['Username']);
                        return redirect()->to(site_url().'\userdashboardc');
                    }
                }
                else
                {
                    $this->session->setTempdata('error','Password does not match');
                    return redirect()->to(site_url().'\logincontroller');
                }
            }
            else
            {
                $this->session->setTempdata('error','Username does not exists');
                return redirect()->to(site_url().'\logincontroller');
            }
        } 
        else
        {
            $data['validation'] = $this->validator;
        } 
        echo view('LoginView',$data);   
    }
}       
?>