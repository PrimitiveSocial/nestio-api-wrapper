<?php

namespace PrimitiveSocial\NestioApiWrapper;

use PrimitiveSocial\NestioApiWrapper\Nestio;
use PrimitiveSocial\NestioApiWrapper\NestioException;

class Agents extends Nestio {

	public function __construct($apiKey = null, $version = 2) {

		parent::__construct($apiKey, $version);

	}

	public function all() {

		$this->callMethod = 'GET';

		$this->uri = 'agents';

		$this->send();

		return $this->output();

	}

	public function byId($id = null) {

		if(!$id) throw NestioException::missingListingId();

		$this->callMethod = 'GET';

		$this->uri = 'agents/' . $id;

		$this->send();

		return $this->output();

	}

}