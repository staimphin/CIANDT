<?php 

/**
 *
 * @author: gregory.staimphon@gmail.com
 *
 * @date: 2019-09-10
class cashmachine
	private $coinList =  array(
	1 ,5 ,10 ,50 ,100 ,500 
	);	
	private $noteList =  array(
	1000 ,5000 ,10000 
	);

		//print_r( $this->currentCash);
		//print_r( array_sum($this->currentCash));

	/* withdraw from current*/
		$results = array();
		$currentMax = $this->checkCurrent();
	
		//check if the machine have enought money first
		if ($amount < $currentMax ){
			
			$results = $this->getDetails($amount);
		} else{
			$results = 'Not enought money';
		}
		return $results;
	
	/**
		foreach($this->currentCash as $money => $qty){
			$temp += $money * $qty;
		}
		return $temp;

	/**
	private function getDetails($amount)
	{
		//gather all unit:  $this->currentCash is unknowm since it's defined outside the class
		$keys =  array_merge($this->coinList, $this->noteList);
		//need to start with higest values
		arsort($keys);
		//print_r($keys);
		$results = '';
		foreach($keys  as  $value){
			$qty = $amount  / $value;
			if($qty >= 1){
				$amount =  $amount - ($qty * $value);
			}
			$results = '<td>'.$qty.'</td>';
		}
		
		return $results;
	}