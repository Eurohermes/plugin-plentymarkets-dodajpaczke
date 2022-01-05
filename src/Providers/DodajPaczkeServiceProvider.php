<?php

namespace DodajPaczke\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;

/**
 * Class DodajPaczkeServiceProvider
 * @package DodajPaczke\Providers
 */
class DodajPaczkeServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        /* [mr] You can register a view controller if needed anytime in a future. */
//        $this->getApplication()->register(DodajPaczkeRouteServiceProvider::class);
    }

    public function boot(ShippingServiceProviderService $shippingServiceProviderService)
    {
        $shippingServiceProviderService->registerShippingProvider(
            'DodajPaczke',
            ['en' => 'Dodaj Paczke', 'de' => 'Dodaj Paczke'],
            [
                'DodajPaczke\\Controllers\\ShippingController@registerShipments',
                'DodajPaczke\\Controllers\\ShippingController@deleteShipments',
                'DodajPaczke\\Controllers\\ShippingController@getLabels',
            ]);
    }
}