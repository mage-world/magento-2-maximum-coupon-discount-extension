# Magento 2 Maximum Coupon Discount Extension
The Maximum Coupon Discount extension helps the store owners to limit the total discount amount when customers apply a coupon code. By pre-setting the maximum amount, it is easier for the web owners to manage all cart rules. Customers will receive the discount amount set by the administrator even their order can reach a larger amount. 
# Demo
* <a href="https://magento2.mage-world.com/demo03/autologin/backend/login?redirect=sales_rule/promo_quote/edit/id/5/" target="_blank">Backend</a>
* [Frontend](https://magento2.mage-world.com/demo03/autologin/frontend/addtocart?redirect=checkout/cart)

# Highlight Features 
* **Limit the money amount to be discounted on each order**

When customers apply a coupon code to an order, no matter how much value the coupon is, customers can receive only the amount that set by the store owners. 
* **Notify customers when the discount amount reaches the limit** 

If the exact discount amount is larger than the limit, customers will see a notification of the issue so they will know the reason they do not receive full discount amount. 
* **Easy to manage**

All the configuration are simple and easy to follow so users can interact with the module without any difficulty. 
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

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

# Support: 
* Tell us your problem: https://support.mage-world.com/hc/en-us
* FAQ: https://www.mage-world.com/faq
