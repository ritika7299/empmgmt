<?php

namespace App\Controllers;

class AppController extends BaseController
{
     protected $session;

      public function index()
    {
      $data['title'] = 'Dashboard';
      $session=session();
      $session->set('logged_in', true);
      if (!$session->get('logged_in'))
     {
      return redirect()->to('/login');
      }
        return view('app/dashboard',$data);
          }
   
}
