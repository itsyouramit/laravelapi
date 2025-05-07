<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\ApiClientMeta;
use Laravel\Passport\ClientRepository;


class ApiRegistrationController extends Controller
{
    public function register(Request $request)
    {

        // Validate input data (you can add more validation if necessary)
        $request->validate([
            'client_name'    => 'required|string|max:255',
            'contact_email'  => 'required|email|unique:api_client_metas,contact_email',
            'description'    => 'required|string|max:500',
        ]);

        $client = Client::create([
            'name' => $request->input('client_name'),
            'secret' => Str::random(40),
            'redirect' => '',
            'personal_access_client' => false,
            'password_client' => false,
            'revoked' => false,
            'provider' => null,
        ]);

        ApiClientMeta::create([
            'oauth_client_id' => $client->id,
            'organization' => $request->input('client_name'),
            'contact_email' => $request->input('contact_email'),
            'description' => $request->input('description'),
            'status' => 'pending',
            // 'allowed_scopes' => json_encode(['get-student-list'])
        ]);

        // Return the client_id and client_secret in the response
        return response()->json([
            "message" => "Client registered successfully. Awaiting approval.",
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'grant_type' => 'client_credentials',
            'token_endpoint' => url('/oauth/token'),
            'token_request_method' => "POST",
            'status' => 'Pending',
            'note' => "Store your credentials securely. You will only be able to request tokens after admin approval."
        ], 201);
    }


}
