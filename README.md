# This is a quick fix for Magento_Paypal Module in Magento2
The whole module is inspired by the pull-Request by  "therool"
which did the pull-request [here](https://github.com/magento/magento2/pull/12401)

The only thing i did is to put his code in a working magento2 module to give currently running shops a working paypal payment method.

Install this Module as every other module in Magento2:
* composer require {Module_Name}
* ./bin/magento module:enable {Module_Name}
* ./bin/magento setup:upgrade

