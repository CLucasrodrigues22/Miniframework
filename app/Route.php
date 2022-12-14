<?php

namespace App;

use MVC\Init\Bootstrap;

class Route extends Bootstrap {

    // função para iniciar rotas
    protected function initRoutes() {
        
        // Rotas de Sessão do usuário
            // Rota de formulário de login
            $routes['home'] = array (
                'route' => '/home',
                'controller' => 'IndexController',
                'action' => 'index'
            );

        $this->setRoutes($routes);
    }
}