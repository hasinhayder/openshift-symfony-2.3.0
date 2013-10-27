<?php
$container->setParameter('database_host', getEnv("OPENSHIFT_MYSQL_DB_HOST"));
$container->setParameter('database_port', getEnv("OPENSHIFT_MYSQL_DB_PORT"));
$container->setParameter('database_name', getEnv("OPENSHIFT_APP_NAME"));
$container->setParameter('database_user', getEnv("OPENSHIFT_MYSQL_DB_USERNAME"));
$container->setParameter('database_password', getEnv("OPENSHIFT_MYSQL_DB_PASSWORD"));
?>