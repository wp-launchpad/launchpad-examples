<?php

namespace Launchpad;

class Uninstaller {
	/**
	 * @uninstall
	 */
	public function unregister_options() {
		delete_option('my_option');
	}
}