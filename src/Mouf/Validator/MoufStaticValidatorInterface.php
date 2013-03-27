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
 * All classes implementing this interface will generate validators on the Mouf front page.
 * There will be only one validator per class. If you want one validator per instance, have a look at
 * MoufValidatorInterface
 * 
 * @author David Negrier
 */
interface MoufStaticValidatorInterface {
	
	/**
	 * Returns the title of the validator (displayed while the validator is being computed).
	 */
	static function getStaticValidatorTitle();
	
	/**
	 * Runs the validation of the instance.
	 * Returns a MoufValidatorResult explaining the result.
	 * 
	 * @return MoufValidatorResult
	 */
	static function validateClass();
}