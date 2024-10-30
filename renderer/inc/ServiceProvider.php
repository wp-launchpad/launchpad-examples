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
		$this->register_admin_subscriber(Subscriber::class);
	}
}
