<?php

class NightsWatch implements IFighter {
	private $fighters = array();

	public function recruit($who) {
		$this->fighters[] = $who;
	}

	public function fight() {
		foreach ($this->fighters as $v) {
			if (method_exists($v, "fight"))
				$v->fight();
		}
	}
}