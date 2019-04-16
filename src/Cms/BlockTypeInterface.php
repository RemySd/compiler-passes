<?php

namespace App\Cms;

interface BlockTypeInterface {

	function getName() : string;
	function render() : string;
}