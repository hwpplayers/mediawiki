<?php

namespace MediaWiki\Api\Hook;

use ApiBase;

/**
 * @stable for implementation
 * @ingroup Hooks
 */
interface APIAfterExecuteHook {
	/**
	 * This hook is called after calling the execute() method of an API module.
	 * Use this hook to extend core API modules.
	 *
	 * @since 1.35
	 *
	 * @param ApiBase $module Module object
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onAPIAfterExecute( $module );
}
