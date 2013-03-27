<?php
/*
 * This file is part of the Mouf core package.
 *
 * (c) 2013 David Negrier <david@mouf-php.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Mouf\Validator;

/**
 * All instances of classes implementing this interface will generate validators on the Mouf front page.
 * There will be one validator per instance. If you want only one validator per class, have a look at
 * MoufStaticValidatorInterface
 * 
 * @author David Negrier
 */
interface MoufValidatorInterface {
	
	/**
	 * Returns the title of the validator (displayed while the validator is being computed).
	 */
	function getValidatorTitle();
	
	/**
	 * Runs the validation of the instance.
	 * Returns a MoufValidatorResult explaining the result.
	 * 
	 * @return MoufValidatorResult
	 */
	function validateInstance();
}