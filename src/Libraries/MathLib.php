<?php

namespace src\Libraries;

class MathLib{
	public function sumarNaturales(int $num1, int ...$numx)
	{
		$result = abs($num1);

		foreach($numx as $num)
		{
			$result += abs($num);
		}

		return $result;
	}
}