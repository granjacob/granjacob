<?php

namespace system\jacobbe\services;

use system\jacobbe\Jacobbe;
class AddressService extends Jacobbe {

	private $endpoint = "/address";

	public function createAddress($data) {
		return $this->create($data, $this->endpoint);
	}

	public function getAllAddress() {
		return $this->getAll($this->endpoint);
	}

	public function getAddressById($id) {
		return $this->getById($id, $this->endpoint);
	}

	public function updateAddress($id, $data) {
		return $this->update($id, $data, $this->endpoint);
	}

	public function deleteAddress($id) {
		return $this->delete($id, $this->endpoint);
	}
}
?>