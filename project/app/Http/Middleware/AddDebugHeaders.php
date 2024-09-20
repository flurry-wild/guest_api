<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddDebugHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $startTime = microtime(true);
        $response = $next($request);
        $endTime = microtime(true);

        // Вычисляем время выполнения запроса
        $executionTime = ($endTime - $startTime) * 1000; // в миллисекундах

        // Получаем использование памяти
        $memoryUsage = memory_get_usage() / 1024; // в Кб

        // Устанавливаем заголовки
        $response->headers->set('X-Debug-Time', round($executionTime, 2));
        $response->headers->set('X-Debug-Memory', round($memoryUsage, 2));

        return $response;
    }
}
