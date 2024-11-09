<?php 
		$price = str_replace('.', '', 23.675);
		$discount = 30; /* Percent */
		$tax = 20; /* Percent */
		$total = 0;
		$estTaxt = 0;
		$taxVal = 0;
		$witoutTax = 0;
		$withTax = 0;
		$subtotal = 0;
		$percentTotal = 0;
		$discountVal = 0; 
		
		echo '<table>';
		echo '<tr>';
		echo '<td>Price</td>';
		echo '<td>'.number_format($price, 0, ',', '.').'</td>';
		echo '</tr>';
       
        
        if ($discount) {
            $percentTotal = $price - ($price * ($discount / 100));
            $discountVal =  $price - $percentTotal; 
            $total = $price - ($price * ($discount / 100));
			$subtotal = $percentTotal;
            
		echo '<tr>';
		echo '<td>Discount(%'.$discount.')</td>';
		echo '<td>-'.number_format($discountVal, 0, ',', '.').'</td>';
		echo '</tr>';
       
		echo '<tr>';
		echo '<td>Subtotal</td>';
		echo '<td>'.number_format($subtotal, 0, ',', '.').'</td>';
		echo '</tr>'; 
        }
        if ($tax) {
        	
        	$witoutTax = $total / (1 + ($tax / 100));
            $withTax = $subtotal + ($subtotal * ($tax/100));
            $taxVal = $subtotal * ($tax/100); 
            
        	$subtotal = $withTax;
        	
		echo '<tr>';
		echo '<td>Tax(%'.$tax.')</td>';
		echo '<td>'.number_format($taxVal, 0, ',', '.').'</td>';
		echo '</tr>';
         
        } 
		echo '<tr>';
		echo '<td>Total</td>';
		echo '<td>'.number_format($subtotal, 0, ',', '.').'</td>';
		echo '</tr>';
		echo '</table>';
        ?>
        <style>tr,td{width:100px}</style>
        
        
