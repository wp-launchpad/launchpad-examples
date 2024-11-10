<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Container\PrefixAware;
use Launchpad\Dependencies\LaunchpadCore\Container\PrefixAwareInterface;

class MyActivator implements PrefixAwareInterface {
	use PrefixAware;

	/**
	 * @activate
	 */
	public function register_options() {
		update_option("{$this->prefix}_my_option", true);
	}
}