<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }


    public function signup()
  {

     $data=[];
     helper('form');
     if($this->request->getMethod()=='post')
     {
       
        $rules=[
          'first_name'=>  'required',
         'last_name'=>  'required',
         'email'=> 'required|valid_email',
         'phone'=> 'required|min_length[1]',
         'password'=> 'required|min_length[1]',
         'confirm_password'=> 'matches[password]',
          
        ];


        if (!$this->validate($rules))
        {
          $data['validation']=$this->validator;
        }
        else
        {
         // echo 1111; exit;
         $model = new AdminModel();

         $newData=[
           
          'first_name' => $this->request->getVar('first_name'),
          'last_name' => $this->request->getVar('last_name'),
          'email'=>$this->request->getVar('email'),
          'phone'=>$this->request->getVar('phone'),
          'password'=>$this->request->getVar('password'),
           
         ]; 
         if($model->save($newData))
         {
          $data['Flash_message']= TRUE;
         }

        }
     }



      return view('signup',$data);
  }
     
  
  
  public function dashboard()
  {
      return view('dashboard');
  }



    
}
