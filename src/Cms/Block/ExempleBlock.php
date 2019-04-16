<?php

namespace App\Cms\Block;

use App\Cms\BlockTypeInterface;

class ExempleBlock implements BlockTypeInterface
{
	public function getName() : string
	{
		return 'exemple';
	}

	public function render() : string
	{
		return 'Ceci est un block de test';
	}
}