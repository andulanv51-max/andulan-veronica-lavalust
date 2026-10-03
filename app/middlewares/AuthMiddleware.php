<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle($next)
    {
        $lava = lava_instance();

        $lava->call->library('api');

        // Get token from Authorization header
        $headers = getallheaders();

        $authHeader = $headers['Authorization'] ?? '';

        if (!$authHeader) {
            $lava->api->respond([
                'message' => 'Unauthorized. Token required.'
            ], 401);
            return;
        }

        // Extract token from "Bearer TOKEN"
        if (strpos($authHeader, 'Bearer ') !== 0) {
            $lava->api->respond([
                'message' => 'Invalid authorization format.'
            ], 401);
            return;
        }

        $token = substr($authHeader, 7);

        // Check token in database
        $user = $lava->db->table('users')
                         ->where('api_token', $token)
                         ->get();

        if (!$user) {
            $lava->api->respond([
                'message' => 'Invalid or expired token.'
            ], 401);
            return;
        }

        // Token is valid
        return $next();
    }
}