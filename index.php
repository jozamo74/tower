<?php 

function towerBuilder( $n ) {
	$tower = new Tower($n);
	return $tower->build();

}

class Tower {
	protected $height;
	protected $tower = [];

	public function __construct(int $height) {
		$this->height = $height;
	}

	public function build() {
		for ($i = 0; $i < $this->height; $i++) {

			$this->tower[] = $this->addFloor($i);
			

		}

		return $this->tower;
	}

	protected function addFloor(int $floor) {
		$result = "";
	// You can add parameters to these method calls

		$numberOfSpaces = ($this->height - $floor ) -1;
		
		$result .= $this->addMargin($numberOfSpaces);
		$result .= $this->addBricks(($floor));
		$result .= $this->addMargin($numberOfSpaces);

		return $result;
	}

	protected function addMargin($numberOfSpaces){
		
		$line = "";
		for ($i=0; $i < $numberOfSpaces; $i++) { 
			$line .= " ";
		}
		return $line;
	}

	protected function addBricks($floor){

		if ($floor > 0) {
			$floor = $floor + $floor + 1;
		} else $floor =  1;

		$line = "";
		for ($j=0; $j < $floor; $j++) { 
			$line .= "*";
		}
		return $line;
	}
}


print_r(towerBuilder(8));


