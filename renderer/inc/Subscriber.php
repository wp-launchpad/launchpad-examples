<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadCore\Container\PrefixAware;
use Launchpad\Dependencies\LaunchpadCore\Container\PrefixAwareInterface;

class Subscriber implements PrefixAwareInterface {

	use PrefixAware;

	public function render() {
		do_action("{$this->prefix}render_template", 'my-template', [
			'parameters' => [
				'title' => 'My title'
			]
		]);
	}
}