<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Exceptions\IntegrityException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        api:__DIR__.'/../routes/api.php',
        apiPrefix: 'api/v1/',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            if ($request->is('api/*')) 
                return response()->json(["message" => 'Url não encontrada', "errors" => $e->getMessage()], 404);
        });
        $exceptions->render(function (MethodNotAllowedHttpException $e, Request $request) {
            if ($request->is('api/*')) 
                return response()->json(["message" => 'Método não permitido', "errors" => $e->getMessage()], 405);
        });
        $exceptions->render(function (IntegrityException $e, Request $request) {
            if ($request->is('api/*')) 
                return response()->json(["message" => 'Restrição de integridade foi violada.', "errors" => $e->getMessage()], 409);
        });
    })->create();
