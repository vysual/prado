<?php

class TStaticSql extends TComponent
{
	private $_preparedStatement;

	public function buildPreparedStatement($statement, $sqlString)
	{
		$factory = new TPreparedStatementFactory($statement, $sqlString);
		$this->_preparedStatement = $factory->prepare();
	}

	public function getPreparedStatement()
	{
		return $this->_preparedStatement;
	}
}

?>