<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    /*Pelo que entendi, verifica se o usuário está logado,
    caso esteja, se ele tentar acessar a página de login é redirecionado para a página especificada;*/
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if(Auth::guard($guard)->check()){ //Verifica se está logado, se estiver, redireciona-o para o dashboard;
                    return redirect()->route('admin.dashboard');
                }
                break;
            
            case 'consumidor':
                if(Auth::guard($guard)->check()){ //Verifica se está logado, se estiver, redireciona-o para o dashboard;
                    return redirect()->route('consumidor.dashboard');
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/');
                }
                break;
        }

        return $next($request);
    }
}