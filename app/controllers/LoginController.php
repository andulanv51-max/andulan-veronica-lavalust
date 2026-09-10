<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller
{
    public function login()
    {
        $this->call->helper('url');
        $this->call->library('session');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === 'admin' && $password === 'admin123') {

                $this->session->set_userdata([
                    'username' => $username,
                    'logged_in' => true
                ]);

                header('Location: ' . site_url('products'));
                exit;
            }

            echo "Invalid username or password.";
            return;
        }

        $this->call->view('login');
    }

    public function logout()
    {
        $this->call->helper('url');
        $this->call->library('session');

        $this->session->unset_userdata([
            'username',
            'logged_in'
        ]);

        header('Location: ' . site_url('login'));
        exit;
    }
}