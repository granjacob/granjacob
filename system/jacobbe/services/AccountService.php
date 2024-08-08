<?php

namespace system\jacobbe\services;

use system\jacobbe\Jacobbe;
class AccountService extends Jacobbe {

	private $endpoint = "/accounts";

	public function createAccount($data) {
		return $this->create($data, $this->endpoint);
	}

	public function getAllAccounts() {
		return $this->getAll($this->endpoint);
	}

	public function getAccountById($id) {
		return $this->getById($id, $this->endpoint);
	}

	public function updateAccount($id, $data) {
		return $this->update($id, $data, $this->endpoint);
	}

	public function deleteAccount($id) {
		return $this->delete($id, $this->endpoint);
	}
}
?>