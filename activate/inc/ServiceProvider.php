<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Activation\HasActivatorServiceProviderInterface;
use Launchpad\Dependencies\LaunchpadCore\Activation\HasActivatorServiceProviderTrait;
use Launchpad\Dependencies\LaunchpadCore\Container\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider implements HasActivatorServiceProviderInterface {
	use HasActivatorServiceProviderTrait;

	/**
	 * Define your services.
	 *
	 * @return void
	 */
	protected function define() {
		$this->register_activator(MyActivator::class);
	}
}
