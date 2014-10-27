<?php
interface RaceCarInterface {
	public function getVMax();
	public function getAcceleration();
}

interface EngineInterface {
	public function getHP();
}

class Engine implements EngineInterface {
	private $horsePower;

	public function __construct($HP) {
		$this->horsePower = $HP;
	}

	public function getHP() {
		return $this->horsePower;
	}
}

class RaceCar implements RaceCarInterface {
	private $vMax;
	private $acceleration;
	private $engine;

	function __construct($vMax, $accel, Engine $engine) {
		$this->vMax = $vMax;
		$this->acceleration = $accel;
		$this->engine = $engine;
	}

	function getVMax() {
		return $this->horsePower;
	}

	function getAcceleration() {
		return $this->acceleration;
	}

	function getMaxSpeed() {
		return round(($this->engine->getHP() * $this->vMax)*2.5 /($this->acceleration));
	}

}	
	
	
?>	

