<?php

namespace Laasti\HtmlEdition;

class ServiceProvider extends \League\Container\ServiceProvider\AbstractServiceProvider implements \League\Container\ServiceProvider\BootableServiceProviderInterface
{

    public function register()
    {
        //Do nothing
    }

    public function boot()
    {
        $container = $this->getContainer();
        $container->addServiceProvider('Laasti\Core\Providers\ConfigFilesProvider');
        $container->addServiceProvider('Laasti\Directions\Providers\LeagueDirectionsProvider');
        $container->addServiceProvider('Laasti\Peels\Providers\LeaguePeelsProvider');
        $container->addServiceProvider('Laasti\Log\MonologProvider');
        $container->addServiceProvider('Laasti\Lazydata\Providers\LeagueLazydataProvider');
        $container->addServiceProvider('Laasti\Views\Providers\LeagueViewsProvider');
        $container->addServiceProvider('Laasti\SymfonyTranslationProvider\SymfonyTranslationProvider');
    }
}
