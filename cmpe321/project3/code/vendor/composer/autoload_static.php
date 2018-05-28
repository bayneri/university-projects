<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42c1c8ea715dfa75693f873b11209bb0
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/controllers/AdminController.php',
        'App\\Controllers\\AdministratorController' => __DIR__ . '/../..' . '/app/controllers/AdministratorController.php',
        'App\\Controllers\\AirplaneController' => __DIR__ . '/../..' . '/app/controllers/AirplaneController.php',
        'App\\Controllers\\AirportController' => __DIR__ . '/../..' . '/app/controllers/AirportController.php',
        'App\\Controllers\\CustomerController' => __DIR__ . '/../..' . '/app/controllers/CustomerController.php',
        'App\\Controllers\\DatabaseController' => __DIR__ . '/../..' . '/app/controllers/DatabaseController.php',
        'App\\Controllers\\EmployeeController' => __DIR__ . '/../..' . '/app/controllers/EmployeeController.php',
        'App\\Controllers\\FlightController' => __DIR__ . '/../..' . '/app/controllers/FlightController.php',
        'App\\Controllers\\PilotController' => __DIR__ . '/../..' . '/app/controllers/PilotController.php',
        'App\\Controllers\\ReservationController' => __DIR__ . '/../..' . '/app/controllers/ReservationController.php',
        'App\\Model\\Administrator' => __DIR__ . '/../..' . '/app/models/Administrator.php',
        'App\\Model\\Airplane' => __DIR__ . '/../..' . '/app/models/Airplane.php',
        'App\\Model\\Airport' => __DIR__ . '/../..' . '/app/models/Airport.php',
        'App\\Model\\Customer' => __DIR__ . '/../..' . '/app/models/Customer.php',
        'App\\Model\\Employee' => __DIR__ . '/../..' . '/app/models/Employee.php',
        'App\\Model\\Flight' => __DIR__ . '/../..' . '/app/models/Flight.php',
        'App\\Model\\Model' => __DIR__ . '/../..' . '/app/models/Model.php',
        'App\\Model\\Pilot' => __DIR__ . '/../..' . '/app/models/Pilot.php',
        'App\\Model\\Reservation' => __DIR__ . '/../..' . '/app/models/Reservation.php',
        'ComposerAutoloaderInit42c1c8ea715dfa75693f873b11209bb0' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit42c1c8ea715dfa75693f873b11209bb0' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Core\\Auth' => __DIR__ . '/../..' . '/core/Auth.php',
        'Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit42c1c8ea715dfa75693f873b11209bb0::$classMap;

        }, null, ClassLoader::class);
    }
}