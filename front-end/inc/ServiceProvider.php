<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Container\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider {

	/**
	 * Define your services.
	 *
	 * @return void
	 */
	protected function define() {
		// Add your services.
		$this->register_common_subscriber(Subscriber::class);
	}
}
