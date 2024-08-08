<?php

namespace system\jacobbe;

class Jacobbe {

	protected $baseUrl = "http://granjacob.com/jacobbe";

	public function create($data, $endpoint) {
		$url = $this->baseUrl . $endpoint;
		$payload = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		return json_decode($response, true);
	}

	public function getAll($endpoint) {
		$url = $this->baseUrl . $endpoint;

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		return json_decode($response, true);
	}

	public function getById($id, $endpoint) {
		$url = $this->baseUrl . $endpoint . "/" . $id;

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		return json_decode($response, true);
	}

	public function update($id, $data, $endpoint) {
		$url = $this->baseUrl . $endpoint . "/" . $id;
		$payload = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		return json_decode($response, true);
	}

	public function delete($id, $endpoint) {
		$url = $this->baseUrl . $endpoint . "/" . $id;

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		return $response;
	}
}