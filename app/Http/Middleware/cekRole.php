<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class cekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, string $role): Response
    {
        $user = Auth::user();//mendapatkan user yang sedang login
        
        if($user -> role != $role){
           abourt(403, 'unauthorize');//jika role idak sesuai

        }
        return $next($request); //jika role sesuai
    }
}
