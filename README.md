The OpenShift `php` cartridge documentation can be found at:

https://github.com/openshift/origin-server/tree/master/cartridges/openshift-origin-cartridge-php/README.md

###How to use this repo
Just create a new ZendServer 5.6 or PHP 5.3 gear from your OpenShift control panel and while creating, supply this git repository's checkout URL (https://github.com/hasinhayder/openshift-symfony-2.3.0) in the "Source Code" field. That's it. And oh by the way, don't forget to add a MySQL cartridge later in this gear. 

![How To Use It](http://copy.com/A8EmuXNbZjPMUSGG/howtouseit.png)


### Quick Tip
After logging into your openshift container, if you want to connect to your database using doctrine but gets an error message like if cannot connect then all you need to do is clear the cache. 
```
cd $OPENSHIFT_REPO_DIR/php
php app/console clear:cache --env=dev
```

That's it! After the cache is cleared your app/console will work perfectly and doctrine can connect to the database without any problem at all. 
