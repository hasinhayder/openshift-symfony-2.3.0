The OpenShift `php` cartridge documentation can be found at:

https://github.com/openshift/origin-server/tree/master/cartridges/openshift-origin-cartridge-php/README.md


### Quick Tip
After logging into your openshift container, if you want to connect to your database using doctrine but gets an error message like if cannot connect then all you need to do is clear the cache. 
```
cd $OPENSHIFT_REPO_DIR/php
php app/console clear:cache --env=dev
```

That's it! After the cache is cleared your app/console will work perfectly and doctrine can connect to the database without any problem at all. 
