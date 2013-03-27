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
 * This class represents a result returned by a validator.
 * 
 * @author David Negrier
 */
class MoufValidatorResult {
	
	const SUCCESS = "ok";
	const WARN = "warn";
	const ERROR = "error";
	
	private $code;
	private $message;
	
	public function __construct($code, $message) {
		$this->code = $code;
		$this->message = $message;
	}
	
	public function toJson() {
		return array("code"=>$this->code, "message"=>$this->message);
	}
}