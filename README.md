# Findologic OXID 4 & 6 Plugin - Export

## Installation
See also [Oxid documentation](https://docs.oxid-esales.com/developer/en/6.2/development/modules_components_themes/module/installation_setup/installation.html).

* Copy the `findologic-export` folder to the plugin directory at `<shop_directory>/source/modules`.

* Install module configuration.
```
vendor/bin/oe-console oe:module:install-configuration source/modules/findologic/findologic-export
```

* Register module package in project composer.json.
```
cd <shop_directory>
composer config repositories.findologic/findologic-export path source/modules/findologic/findologic-export
composer require findologic/export
```

* Open the OXID admin and activate the module Findologic - Export.
