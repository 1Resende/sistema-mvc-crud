<?php 

namespace App\Http\Middleware;

use Exception;

class Maintenance
{

    /**
     * Método responsável por executar o middleware
     * @param Request $request
     * @param Closure $next
     * @return Response
     * 
     */
    public function handle($request, $next)
    {
        //Verifica o estado de manutenção da página
        if(getenv('MAINTENANCE') == 'true'){
            throw new Exception("Página em manutenção. Tente novamente mais tarde!", 200);
        }
        //Executa o próximo nível do middleware
        return $next($request);
    }
}