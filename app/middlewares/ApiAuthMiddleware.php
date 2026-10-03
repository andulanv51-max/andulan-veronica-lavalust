<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ApiAuthMiddleware
{
    public function handle(Closure $next)
    {
        $lava = lava_instance();

        // Get Bearer token from Authorization header
        $token = $lava->request->bearer_token();

        // No token
        if (!$token) {
            $lava->call->library('api');

            $lava->api->respond([
                'message' => 'Unauthorized. Token required.'
            ], 401);

            return;
        }

        // Find user with this token
        $user = $lava->db->table('users')
                          ->where('api_token', $token)
                          ->get();

        // Invalid token
        if (!$user) {
            $lava->call->library('api');

            $lava->api->respond([
                'message' => 'Unauthorized. Invalid token.'
            ], 401);

            return;
        }

        // Token is valid
        return $next();
    }
}