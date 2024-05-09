<?php

namespace Webkul\Administration\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'customer.registration.after' => [
            'Webkul\Administration\Listeners\Customer@afterCreated',
        ],

        'admin.password.update.after' => [
            'Webkul\Administration\Listeners\Admin@afterPasswordUpdated',
        ],

        'checkout.order.save.after' => [
            'Webkul\Administration\Listeners\Order@afterCreated',
        ],

        'sales.order.cancel.after' => [
            'Webkul\Administration\Listeners\Order@afterCanceled',
        ],

        'sales.invoice.save.after' => [
            'Webkul\Administration\Listeners\Invoice@afterCreated',
        ],

        'sales.shipment.save.after' => [
            'Webkul\Administration\Listeners\Shipment@afterCreated',
        ],

        'sales.refund.save.after' => [
            'Webkul\Administration\Listeners\Refund@afterCreated',
        ],

        'core.channel.update.after' => [
            'Webkul\Administration\Listeners\ChannelSettingsChange@checkForMaintenanceMode',
        ],
    ];
}
