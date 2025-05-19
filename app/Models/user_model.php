<?php
namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'user_data';
    protected $allowedFields = ['username', 'email', 'password'];
    protected $beforeInsert = ['hashPassword'];

    /**
     * Hash password before inserting to database
     */
    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    /**
     * Verify if username already exists
     */
    public function usernameExists($username)
    {
        return $this->where('username', $username)->countAllResults() > 0;
    }

    /**
     * Verify if email already exists
     */
    public function emailExists($email)
    {
        return $this->where('email', $email)->countAllResults() > 0;
    }

    /**
     * Verify user credentials for login
     * Checks if the username exists and password matches the hashed password in the database
     * Returns user data array if valid, false otherwise
     */
    /**
     * Verify user credentials for login
     * Checks if the username exists and password matches the password in the database
     * Note: Passwords are stored in plain text in the database, which is not secure.
     * It is highly recommended to migrate to hashed passwords for security.
     * This method compares plain text passwords directly for compatibility.
     * Returns user data array if valid, false otherwise
     */
    /**
     * Verify user credentials for login
     * Checks if the username exists and password matches the password in the database
     * Supports both hashed and plain text passwords for backward compatibility.
     * Returns user data array if valid, false otherwise
     */
    public function verifyUser($username, $password)
    {
        // Find user by username
        $user = $this->where('username', $username)->first();

        if (!$user) {
            // User not found
            return false;
        }

        // Check if password is hashed (starts with $2y$ for bcrypt)
        if (strpos($user['password'], '$2y$') === 0) {
            // Verify hashed password
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        } else {
            // Compare plain text password directly (insecure)
            if ($password === $user['password']) {
                return $user;
            }
        }

        // Password does not match
        return false;
    }
}