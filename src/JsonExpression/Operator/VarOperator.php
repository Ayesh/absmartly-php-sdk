<?php

namespace Absmartly\SDK\JsonExpression\Operator;

use Absmartly\SDK\JsonExpression\Evaluator;

class VarOperator implements OperatorInterface {

	public function evaluate(Evaluator $evaluator, $path = null) {
		if (is_object($path)) {
			$path = $path->path;
		}

		if (is_array($path) && isset($path['path'])) {
			$path = $path['path'];
		}

		if (!is_string($path)) {
			return null;
		}

		return $evaluator->extractVar($path);
	}
}
