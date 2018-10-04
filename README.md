# Magento 2 Maximum Coupon Discount Extension
The Maximum Coupon Discount extension helps the store owners to limit the total discount amount when customers apply a coupon code. By pre-setting the maximum amount, it is easier for the web owners to manage all cart rules. Customers will receive the discount amount set by the administrator even their order can reach a larger amount. 
# Documentation:
* Product page: https://www.mage-world.com/maximum-coupon-discount-magento-2.html
* User guide: https://docs.mage-world.com/doku.php?id=magento_2:maximum_coupon_discount
# How to install:
* Conditions:

If you have a dev site, please install on it to test first.

If you don't have a dev site, please backup source code and database of live site before installation.

A ftp client software: Filezilla, Winscp.

* Step 1: Download source code from MageWorld.

After you complete your order, please go to My Downloads to download extension.

* Step 2: Unzip extension package and upload them to Magento root folde.

Unzip file that you've just downloaded and use FileZilla (WinSCP) to upload to Magento root folde.

* Step3: Run setting up command line.

Login to ssh, go to Magento root folder and run these command lines:

<code>
php bin/magento setup:upgrade

php bin/magento setup:static-content:deploy

php bin/magento cache:flush
</code>
#Support: 
* Tell us your problem: https://support.mage-world.com/hc/en-us
* FAQ: https://www.mage-world.com/faq
