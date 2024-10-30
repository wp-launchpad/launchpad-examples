<?php
namespace Launchpad\Configs;

defined( 'ABSPATH' ) || exit;

return [
    \Launchpad\Dependencies\LaunchpadRenderer\ServiceProvider::class,
    \Launchpad\Dependencies\::class,
	\Launchpad\ServiceProvider::class,
];
