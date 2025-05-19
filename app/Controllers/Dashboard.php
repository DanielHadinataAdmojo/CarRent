<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];
        $session = session();
        if ($session->get('isLoggedIn')) {
            $data['username'] = $session->get('username');
        } else {
            $data['username'] = null;
        }
        return view('car/dashboard', $data);
    }
}
