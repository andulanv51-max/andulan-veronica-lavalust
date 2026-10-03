<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthApiController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('api');
    }

    // POST - Register
    public function register()
    {
        $this->api->require_method('POST');

        $input = $this->api->body();

        $username = $input['username'] ?? '';
        $email    = $input['email'] ?? '';
        $password = $input['password'] ?? '';

        // Check required fields
        if (empty($username) || empty($email) || empty($password)) {
            $this->api->respond([
                'message' => 'Username, email, and password are required'
            ], 400);
            return;
        }

        // Check if username already exists
        $existingUser = $this->db->table('users')
                                 ->where('username', $username)
                                 ->get();

        if ($existingUser) {
            $this->api->respond([
                'message' => 'Username already exists'
            ], 409);
            return;
        }

        // Check if email already exists
        $existingEmail = $this->db->table('users')
                                  ->where('email', $email)
                                  ->get();

        if ($existingEmail) {
            $this->api->respond([
                'message' => 'Email already exists'
            ], 409);
            return;
        }

        // Hash password
        $hashedPassword = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        // Insert user
        $this->db->table('users')->insert([
            'username'   => $username,
            'email'      => $email,
            'password'   => $hashedPassword,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        $this->api->respond([
            'message' => 'User registered successfully'
        ], 201);
    }

    // POST - Login
    public function login()
    {
        $this->api->require_method('POST');

        $input = $this->api->body();

        $username = $input['username'] ?? '';
        $password = $input['password'] ?? '';

        // Find user
        $user = $this->db->table('users')
                         ->where('username', $username)
                         ->get();

        if (!$user) {
            $this->api->respond([
                'message' => 'Invalid username or password'
            ], 401);
            return;
        }

        // Check password
        if (!password_verify($password, $user['password'])) {
            $this->api->respond([
                'message' => 'Invalid username or password'
            ], 401);
            return;
        }

        // Generate token
        $token = bin2hex(random_bytes(32));

        // Save token
        $this->db->table('users')
                 ->where('id', $user['id'])
                 ->update([
                     'api_token' => $token
                 ]);

        // Return token
        $this->api->respond([
            'message' => 'Login successful',
            'token'   => $token,
            'user'    => [
                'id'       => $user['id'],
                'username' => $user['username'],
                'email'    => $user['email']
            ]
        ]);
    }
}