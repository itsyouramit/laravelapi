<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Passport\TokenRepository;
use Laravel\Passport\ClientRepository;
use League\OAuth2\Server\ResourceServer;
use Illuminate\Auth\AuthenticationException;

class HandleClientApiRequest
{

    protected $server;

    public function __construct(ResourceServer $server){
        $this->server = $server;
    }


    public function handle(Request $request, Closure $next): Response
    {
        try {
            // This will validate the Bearer token and attach token info to request
            $psr = \Laminas\Diactoros\ServerRequestFactory::fromGlobals();
            $psr = $this->server->validateAuthenticatedRequest($psr);

            // Retrieve client ID from validated token
            $clientId = $psr->getAttribute('oauth_client_id');
            $scopes   = $psr->getAttribute('oauth_scopes');

            // Optionally log or check access here
            \Log::info('Authenticated client request', [
                'client_id' => $clientId,
                'scopes' => $scopes,
                'ip' => $request->ip(),
            ]);

            return $next($request);

        } catch (\League\OAuth2\Server\Exception\OAuthServerException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getHttpStatusCode());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error', 'message' => $e->getMessage()], 500);
        }
    }
}
