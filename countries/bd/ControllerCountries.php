<?php 

	
	class ControllerCountries {
		protected $countries;
		
		public function __construct() {
			$this->init();
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function init() {
			$this->__set('countries', [
				"Italy" => "Rome", 
				"Luxembourg" => "Luxembourg", 
				"Belgium"=> "Brussels", 
				"Denmark" => "Copenhagen", 
				"Finland" => "Helsinki", 
				"France" => "Paris",
				"Slovakia" => "Bratislava",
				"Slovenia" => "Ljubljana",
				"Germany" => "Berlin",
				"Greece" => "Athens",
				"Ireland" => "Dublin",
				"Netherlands" => "Amsterdam",
				"Portugal" => "Lisbon",
				"Spain" => "Madrid",
				"Sweden" => "Stockholm",
				"United Kingdom" => "London",
				"Cyprus" => "Nicosia",
				"Lithuania" => "Vilnius",
				"Czech Republic" => "Prague",
				"Estonia" => "Tallin",
				"Hungay" => "Budapest",
				"Latvia" => "Riga",
				"Malta" => "Valetta",
				"Austria" => "Vienna",
				"Poland" => "Warsaw"	
			]);
		}

	}

?>