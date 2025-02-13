<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\nbt\tag;

use RuntimeException;
use function get_class;

trait NoDynamicFieldsTrait{

	private function throw(string $field) : void{
		throw new RuntimeException("Cannot access dynamic field \"$field\": Dynamic field access on " . get_class($this) . " is no longer supported");
	}

	public function __get($name){
		$this->throw($name);
	}

	public function __set($name, $value){
		$this->throw($name);
	}

	public function __isset($name){
		$this->throw($name);
	}

	public function __unset($name){
		$this->throw($name);
	}
}
