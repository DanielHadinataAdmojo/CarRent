<?php
namespace App\Controllers;

class Login extends BaseController
{
    protected $userModel;
    protected $validation;

    
    public function __construct()
    {
        $this->userModel = new \App\Models\User_model();
        $this->validation = \Config\Services::validation();
    }

    /**
     * Shows the public landing page (visible without login)
     */
    public function index()
    {
        $data = [];
        $session = session();
        if ($session->get('isLoggedIn')) {
            $data['username'] = $session->get('username');
        } else {
            $data['username'] = null;
        }
        return view('car/ui_login', $data);
    }
    public function register()
    {
        // Check if user is already logged in
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        $data = [
            'validation' => $this->validation
        ];

        return view('car/register_page', $data);
    }

    /**
     * Process registration form submission
     */
    public function processRegister()
    {
        // Set validation rules
        $rules = [
            'username' => [
                'rules' => 'required|min_length[3]|max_length[20]|is_unique[user_data.username]',
                'errors' => [
                    'is_unique' => 'This username is already taken.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[user_data.email]',
                'errors' => [
                    'is_unique' => 'This email is already registered.'
                ]
            ],
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]'
        ];

        // Validate input
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validation);
        }

        // Prepare user data
        $userData = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        // Save to database
        if ($this->userModel->save($userData)) {
            return redirect()->to('/login')->with('success', 'Registration successful! Please login.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to register. Please try again.');
        }
    }
    /**
     * Shows the login form
     */
    public function login()
    {
        // If user is already logged in, redirect to dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }
        
        return view('car/login_page');
    }

    /**
     * Handles login form submission
     */
    /**
     * Handles login form submission
     */
    public function processLogin()
    {
        // Validate input fields
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required|min_length[8]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, redirect back with errors and input
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Get username and password from POST request
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Verify user credentials using the User_model
        $user = $this->userModel->verifyUser($username, $password);

        if (!$user) {
            // Invalid credentials, redirect back with error message
            return redirect()->back()->withInput()->with('error', 'Invalid username or password');
        }

        // Credentials are valid, set user session data
        $session = session();
        $session->set([
            'isLoggedIn' => true,
            'userId' => $user['id'],
            'username' => $user['username']
        ]);

        // Redirect to dashboard with success message
        return redirect()->to('/')
            ->with('success', 'Login successful!')
            ->with('username', $user['username']);
    }
    

    /**
     * Logs out the user
     */
    public function logout()
    {
        $session = session();
        $session->setFlashdata('success', 'Logout successful!');
        $session->remove(['isLoggedIn', 'userId', 'username']);
        return redirect()->to('/');
    }
}