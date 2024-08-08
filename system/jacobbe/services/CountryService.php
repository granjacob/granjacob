<?php

namespace system\jacobbe\services;

use system\jacobbe\Jacobbe;
class CountryService extends Jacobbe {

	private $endpoint = "/countries";

	public function createCountry($data) {
		return $this->create($data, $this->endpoint);
	}

	public function getAllCountries() {
		return $this->getAll($this->endpoint);
	}

	public function getCountryById($id) {
		return $this->getById($id, $this->endpoint);
	}

	public function updateCountry($id, $data) {
		return $this->update($id, $data, $this->endpoint);
	}

	public function deleteCountry($id) {
		return $this->delete($id, $this->endpoint);
	}
}
?>