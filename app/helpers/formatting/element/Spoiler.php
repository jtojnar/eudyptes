<?php

namespace App\Helpers\Formatting\Element;

use League\CommonMark\Block\Element\AbstractBlock;
use League\CommonMark\Cursor;

class Spoiler extends AbstractBlock {
	/** @var ?string */
	private $summary;

	/**
	 * Constructor
	 *
	 * @param ?string Summary of the spoiler block
	 */
	public function __construct($summary = null) {
		parent::__construct();

		$this->summary = $summary;
	}

	/**
	 * Returns the summary of the spoiler block
	 *
	 * @return string
	 */
	public function getSummary() {
		return $this->summary;
	}

	/**
	 * Returns true if this block can contain the given block as a child node
	 *
	 * @param AbstractBlock $block
	 *
	 * @return bool
	 */
	public function canContain(AbstractBlock $block) {
		return true;
	}

	/**
	 * Returns true if block type can accept lines of text
	 *
	 * @return bool
	 */
	public function acceptsLines() {
		return false;
	}

	/**
	 * Whether this is a code block
	 *
	 * @return bool
	 */
	public function isCode() {
		return false;
	}

	public function matchesNextLine(Cursor $cursor) {
		return true;
	}
}
