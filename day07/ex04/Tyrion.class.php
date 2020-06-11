<?php

class Tyrion extends Lannister {
	public function sleepWith($p) {
		if (get_class($p) === "Sansa")
			echo "Let's do this.\n";
		else if (get_class($p) === "Jaime")
			echo "Not even if I'm drunk !\n";
		else if (get_class($p) === "Cersei")
			echo "Not even if I'm drunk !\n";
	}
}