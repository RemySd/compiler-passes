<?php

namespace App\Cms\Block;

use App\Cms\BlockTypeInterface;

class WeshBlock implements BlockTypeInterface
{
	public function getName() : string
	{
		return 'wesh';
	}

	public function render() : string
	{
		return 'Ceci est un block de wesh wesh';
	}
}