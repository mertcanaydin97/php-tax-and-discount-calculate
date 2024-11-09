<?php

function percent_calculate($price, $percent, $type = null/* diff | include | result */)
{

	switch ($type) {
		case 'diff':
			$price -= ($price * ($percent / 100));
			break;

		case 'include':
			$price += ($price * (1 + ($percent / 100)));
			break;

		default:
			$price = ($price * (1 + ($percent / 100)));
			break;
	}

	return $price;
}
/* Tax or Discount etc*/
echo percent_calculate(10000, 20, 'diff'); /* Equals 8000 */
echo "\n";
echo percent_calculate(10000, 20, 'result'); /* Equals 12000 */
echo "\n";
echo percent_calculate(10000, 20, 'include'); /* Equals 22000 */
