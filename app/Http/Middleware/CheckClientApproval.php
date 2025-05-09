<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ApiClientMeta;

class CheckClientApproval
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('oauth/token') && $request->input('grant_type') === 'client_credentials') {

            $clientId = $request->input('client_id');

            $meta = ApiClientMeta::where('oauth_client_id', $clientId)->first();

            if (!$meta || $meta->status !== 'approved') {
                return response()->json([
                    'error' => 'Client is not approved to request a token.',
                    'status' => $meta->status ?? 'not_found',
                ], 403);
            }

            $requestedScopes = $request->input('scopes', []); // Get requested scopes
            $allowedScopes = json_decode($meta->allowed_scopes, true);

            // If the requested scopes don't match the allowed ones, deny the request
            if(!empty($requestedScopes) && !empty(array_diff($requestedScopes, $allowedScopes))){
                return response()->json([
                    'error' => 'Requested scopes are not allowed for this client.',
                    'allowed_scopes' => $allowedScopes,
                ], 201);
            }
        }

        return $next($request);
    }
}
