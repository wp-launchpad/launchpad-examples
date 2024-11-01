<?php

namespace Launchpad;

use Launchpad\Dependencies\LaunchpadFront\UseAssets;
use Launchpad\Dependencies\LaunchpadFront\UseAssetsInterface;

class Subscriber implements UseAssetsInterface {
	use UseAssets;

	/**
	 * @hook wp_enqueue_scripts
	 */
	public function register_assets() {
		$this->assets
			->with_script('app.js')
			->with_key('my_app')
			->with_dependencies([
				'jquery'
			])
			->in_footer()
			->register();

		$this->assets->with_style('app.css')
			->with_key('my_app')
			->with_dependencies([
				'bootstrap'
			])
			->with_media('desktop')
			->enqueue();
	}
}