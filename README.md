# Export Plugin for OXID Direct Integration

## Installation
See also [Oxid documentation](https://docs.oxid-esales.com/developer/en/6.2/development/modules_components_themes/module/installation_setup/installation.html).

* Checkout module to the modules directory in the OXID eShop.
```bash
cd <shop_directory>/source/modules/findologic-export
git clone https://github.com/findologic/plugin-oxid-di-export/ findologic-export
```

Or just copy the "findologic-export" folder to the Oxid plugin directory "modules".

* Install module configuration.
```
vendor/bin/oe-console oe:module:install-configuration source/modules/findologic/findologic-export
```

* Register module package in project composer.json.
```
cd <shop_directory>
composer config repositories.findologic/findologic-export path source/modules/findologic/findologic-export
composer require findologic/export:*
```

* Activate the Findologic export plugin in your OXID backend.
