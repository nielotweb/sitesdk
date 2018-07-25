<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\Controller' => $baseDir . '/Controllers/Controller.php',
    'App\\Controllers\\Core\\LoginController' => $baseDir . '/Controllers/Core/LoginController.php',
    'App\\Controllers\\Helpers\\LogoutController' => $baseDir . '/Controllers/Helpers/LogoutController.php',
    'App\\Core\\Database\\Connection' => $baseDir . '/Core/Database/Connection.php',
    'App\\Core\\Database\\QueryBuilder' => $baseDir . '/Core/Database/QueryBuilder.php',
    'App\\Core\\FlashBag' => $baseDir . '/Core/FlashBag.php',
    'App\\Core\\Interfaces\\FlashBagInterface' => $baseDir . '/Core/Interfaces/FlashBagInterface.php',
    'App\\Core\\Request' => $baseDir . '/Core/Request.php',
    'App\\Core\\Router' => $baseDir . '/Core/Router.php',
    'App\\Core\\Security\\Auth' => $baseDir . '/Core/Security/Authorization.php',
    'App\\Core\\SessionManagement' => $baseDir . '/Core/Session.php',
    'App\\Model\\Query\\Interfaces\\UserQueryInterface' => $baseDir . '/Model/Query/Interfaces/UserQueryInterface.php',
    'App\\Model\\Query\\View\\SQLUserView' => $baseDir . '/Model/Query/View/SQLUserView.php',
    'App\\Model\\Service\\Authorization\\Login' => $baseDir . '/Model/Service/Authorization/LoginService.php',
    'App\\Model\\Service\\Helpers\\LoginData' => $baseDir . '/Model/Service/Helpers/LoginData.php',
    'BoardController' => $baseDir . '/Controllers/Core/BoardController.php',
    'ComposerAutoloaderInit4dda8b8dae46899a97d56d698e2290b2' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit4dda8b8dae46899a97d56d698e2290b2' => $vendorDir . '/composer/autoload_static.php',
    'Test\\Controller\\FlashMessages' => $baseDir . '/Controllers/Helpers/TestController.php',
);
