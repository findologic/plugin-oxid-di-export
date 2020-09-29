# Findologic OXID 4 & 6 Export Plugin

In order to use the Findologic service you need to install:
* Findologic [plugin-oxid-di](https://github.com/findologic/plugin-oxid-di) for search & navigation platform.
* Findologic [plugin-oxid-di-export](https://github.com/findologic/plugin-oxid-di-export/) for product export.

## Installation
See also [Oxid documentation](https://docs.oxid-esales.com/developer/en/6.2/development/modules_components_themes/module/tutorials/module_setup.html).

* Copy the `findologic-export` folder to the plugin directory at `<shop_directory>/source/modules`.

* Install module configuration:
```bash
cd <shop_directory>
vendor/bin/oe-console oe:module:install-configuration source/modules/findologic-export/findologic-export
```

* Register module package in project composer.json:
```bash
cd <shop_directory>
composer config repositories.findologic/findologic-export path source/modules/findologic-export/findologic-export
composer require findologic/export
```

* Install dependencies
```bash
cd <shop_directory>/source/modules/findologic-export/findologic-export
composer install
```

* Open the OXID admin and activate the module Findologic - Export.

## Product export

For the functionality of the plugin it's essential to export the product data from the shop to Findologic. 
For this purpose, the Findologic export library [libflexport](https://github.com/findologic/libflexport)
is included. By default the export contains only demo product data.

The export is triggerred by the [plugin-oxid-di](https://github.com/findologic/plugin-oxid-di) module and 
calls `FindologicExport::startExport`. Please use this example and modify it to your needs.

The xml export documentation can be found [here](https://docs.findologic.com/doku.php?id=xml_export_documentation:XML_format).
The exported XML is validated against a predefined [XSD Schema](https://github.com/findologic/xml-export/blob/master/src/main/resources/findologic.xsd).

## Run export

The export can be triggered by URL in your browser:

* https://\<SHOP_URL\>/findologic_export.php?shopkey=\<SHOP_KEY\>&start=\<NUMBER\>&count=\<NUMBER\>

Parameters:
* **Shopkey:** API key provided by Findologic
* **Start:** number that should not be lower than zero
* **Count:** number that should not lower than zero and “start” number
