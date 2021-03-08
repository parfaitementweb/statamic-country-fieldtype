import CountrySelector from '../js/components/fieldtypes/CountrySelector';

Statamic.booting(() => {
    Statamic.$components.register('country_selector-fieldtype', CountrySelector);
});
