<?php

namespace controllers;

use core\Controller;

class UserController extends Controller
{
       public function LoginAction() {
           $this->view->render('Login');
       }

       public function RegisterAction() {
           $this->view->render('Registration');
       }


}