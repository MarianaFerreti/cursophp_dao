<?php 

class Sql extends PDO {

	private $conn;

	public function __construct() {
		parent::__construct(
			"mysql:dbname=dbphp7;host=localhost",
			"root",
			"",
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]
		);
	}

	private function setParams($statement, $parameters = []) {
		foreach ($parameters as $key => $value) {
			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value) {
		$statement->bindValue($key, $value);
	}

	public function queryParams($rawQuery, $params = []) {
		$stmt = $this->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;
	}

	public function select($rawQuery, $params = []): array {
		return $this->queryParams($rawQuery, $params)
		            ->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>