<?php
declare(strict_types=1);
namespace Absmartly\SDK\JsonExpression\Operator;

use Absmartly\SDK\JsonExpression\Evaluator;

class ValueOperator implements OperatorInterface {

	public function evaluate(Evaluator $evaluator, $arg = null) {
		return $arg;
	}
}
