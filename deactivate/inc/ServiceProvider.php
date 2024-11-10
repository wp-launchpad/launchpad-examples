<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Container\AbstractServiceProvider;
use Launchpad\Dependencies\LaunchpadCore\Deactivation\HasDeactivatorServiceProviderInterface;
use Launchpad\Dependencies\LaunchpadCore\Deactivation\HasDesactivatorServiceProviderTrait;

class ServiceProvider extends AbstractServiceProvider implements HasDeactivatorServiceProviderInterface {
	use HasDesactivatorServiceProviderTrait;

	/**
	 * Define your services.
	 *
	 * @return void
	 */
	protected function define() {
		$this->register_deactivator(MyDeactivator::class);
	}
}
