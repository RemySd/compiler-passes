<?php

namespace App\Cms;

class RegistryBlock {

	private $blocks;

	public function registryBlocks(Iterable $blocks)
	{

		foreach ($blocks as $block) {
			$this->registryBlock($block->getName());
		}
		
	}

	public function registryBlock(string $block)
	{
		$this->blocks[$block] = $block;
	}

	public function render(string $blockName) : string
	{
		if(!isset($this->blocks[$blockName])) {
			throw new Exception("Ce bloc est inexistant");
		}

		return $this->blocks[$blockName];
	}

}
