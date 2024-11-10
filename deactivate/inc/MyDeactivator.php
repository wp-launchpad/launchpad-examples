<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Container\PrefixAware;
use Launchpad\Dependencies\LaunchpadCore\Container\PrefixAwareInterface;

class MyDeactivator implements PrefixAwareInterface {
	use PrefixAware;

	/**
	 * @deactivate
	 */
	public function unregister_options() {
		delete_option("{$this->prefix}my_option");
	}
}