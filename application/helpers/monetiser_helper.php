
 <?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('decaleMillier')) {
	function decaleMillier($valeur) {
		if(is_numeric($valeur))
		{
			
			$retour =new \NumberFormatter("it-IT",\NumberFormatter::CURRENCY);
			$retour=$retour->format($valeur);
			
			return $retour.' Ar';
		}
		else return -1;
	}
 }