<?php

namespace Parfaitementweb\StatamicCountryFieldtype;

use Parfaitementweb\StatamicCountryFieldtype\Fieldtypes\CountrySelector;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../public/js/addon.js'
    ];

    protected $fieldtypes = [
        CountrySelector::class,
    ];
}
