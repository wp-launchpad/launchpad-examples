<?php
namespace Launchpad\Configs;

defined( 'ABSPATH' ) || exit;

return [
    \Launchpad\Dependencies\LaunchpadFront\ServiceProvider::class,
	\Launchpad\ServiceProvider::class,
];
