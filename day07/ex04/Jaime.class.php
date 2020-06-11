<?php

class Jaime extends Lannister {
	public function sleepWith($p) {
		if (get_class($p) === "Sansa")
			echo "Let's do this.\n";
		else if (get_class($p) === "Tyrion")
			echo "Not even if I'm drunk !\n";
		else if (get_class($p) === "Cersei")
			echo "With pleasure, but only in a tower in Winterfell, then.\n";
	}
}