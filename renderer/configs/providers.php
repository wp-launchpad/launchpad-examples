<?php
namespace Launchpad\Configs;

defined( 'ABSPATH' ) || exit;

return [
    \Launchpad\Dependencies\LaunchpadRenderer\ServiceProvider::class,
	\Launchpad\ServiceProvider::class,
];
