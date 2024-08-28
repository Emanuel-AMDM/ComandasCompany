<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9
{
    public static $files = array (
        'b1dcd2d4a1271a6d241d6ff1403a32c0' => __DIR__ . '/../..' . '/src/helpers/controller.php',
        '9467ee09f6d86374e4e8e391d17ee888' => __DIR__ . '/../..' . '/src/helpers/view.php',
        'e02c45b67a3588ffda7b6d962cb0274a' => __DIR__ . '/../..' . '/src/helpers/url.php',
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/../..' . '/src/models/Attribute.php',
        'AttributeDAO' => __DIR__ . '/../..' . '/src/daos/AttributeDAO.php',
        'AttributeOption' => __DIR__ . '/../..' . '/src/models/AttributeOption.php',
        'AttributeOptionDAO' => __DIR__ . '/../..' . '/src/daos/AttributeOptionDAO.php',
        'Client' => __DIR__ . '/../..' . '/src/models/Client.php',
        'ClientController' => __DIR__ . '/../..' . '/src/controllers/ClientController.php',
        'ClientDAO' => __DIR__ . '/../..' . '/src/daos/ClientDAO.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DB' => __DIR__ . '/../..' . '/src/database/DB.php',
        'HomeController' => __DIR__ . '/../..' . '/src/controllers/HomeController.php',
        'Order' => __DIR__ . '/../..' . '/src/models/Order.php',
        'OrderDAO' => __DIR__ . '/../..' . '/src/daos/OrderDAO.php',
        'OrderItem' => __DIR__ . '/../..' . '/src/models/OrderItem.php',
        'OrderItemController' => __DIR__ . '/../..' . '/src/controllers/OrderItemController.php',
        'OrderItemDAO' => __DIR__ . '/../..' . '/src/daos/OrderItemDAO.php',
        'OrdersController' => __DIR__ . '/../..' . '/src/controllers/OrdersController.php',
        'Product' => __DIR__ . '/../..' . '/src/models/Product.php',
        'ProductDAO' => __DIR__ . '/../..' . '/src/daos/ProductDAO.php',
        'ProductsController' => __DIR__ . '/../..' . '/src/controllers/ProductsController.php',
        'Registration' => __DIR__ . '/../..' . '/src/models/Registration.php',
        'RegistrationController' => __DIR__ . '/../..' . '/src/controllers/RegistrationController.php',
        'RegistrationDAO' => __DIR__ . '/../..' . '/src/daos/RegistrationDAO.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit722216232bb439e3e8f18604b1ed9dc9::$classMap;

        }, null, ClassLoader::class);
    }
}
