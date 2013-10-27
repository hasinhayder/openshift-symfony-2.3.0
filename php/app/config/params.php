<?php
$container->setParameter('database.host', getEnv("OPENSHIFT_MYSQL_DB_HOST"));
$container->setParameter('database.port', getEnv("OPENSHIFT_MYSQL_DB_PORT"));
$container->setParameter('database.name', getEnv("OPENSHIFT_APP_NAME"));
$container->setParameter('database.user', getEnv("OPENSHIFT_MYSQL_DB_USERNAME"));
$container->setParameter('database.password', getEnv("OPENSHIFT_MYSQL_DB_PASSWORD"));
?>