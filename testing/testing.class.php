<?php


class testing {
	
	private $results;
	private $passed;
	private $warning;
	private $failed;
	private $bonus_points;
	private $fatal;
	
	public function __construct(){
		$this->passed = 0;
		$this->warning = 0;
		$this->failed = 0;
		$this->bonus_points = 0;
		$this->fatal = 0;
	}
	
	public function header($header){
		$this->results[] = array(
			'msg' => $header,
			'type' => 'HEADER'
		);
	}
	
	public function title($header){
		$this->results[] = array(
			'msg' => $header,
			'type' => 'TITLE'
		);
	}
	
	// unordered list
	public function ul($array){
		$this->results[] = array(
			'msg' => (array) $array,
			'type' => 'UNORDERED_LIST'
		);
	}
	
	// ordered list
	public function ol($array){
		$this->results[] = array(
			'msg' => (array) $array,
			'type' => 'ORDERED_LIST'
		);
	}
	
	// named list
	public function nl($array){
		$this->results[] = array(
			'msg' => (array) $array,
			'type' => 'NAMED_LIST'
		);
	}
	
	public function awesome($msg){
		$this->bonus_points++;
		$this->results[] = array(
			'msg' => $msg,
			'type' => 'AWESOME'
		);
	}
	
	public function passed($msg){
		$this->passed++;
		$this->results[] = array(
			'msg' => $msg,
			'type' => 'PASSED'
		);
	}
	
	public function warn($msg){
		$this->warning++;
		$this->results[] = array(
			'msg' => $msg,
			'type' => 'WARNING'
		);
	}
	
	public function fail($msg){
		$this->failed++;
		$this->results[] = array(
			'msg' => $msg,
			'type' => 'FAILED'
		);
	}
	
	public function fatal($msg){
		$this->failed++;
		$this->fatal++;
		$this->results[] = array(
			'msg' => $msg,
			'type' => 'FATAL'
		);
		return $this->output();
	}
	
	public function output(){
		$output = '#### Starting Testing ####'.PHP_EOL;
		if ($this->results != array()) {
			foreach ($this->results as $result) {
				$type = strtoupper($result['type']);
				$msg = $result['msg'];
				if ($type == 'HEADER'){
					$output .= PHP_EOL."=== $msg ===";
				} elseif($type == 'TITLE') {
					$output .= PHP_EOL."   $msg";
				} elseif($type == 'UNORDERED_LIST') {
					unset($item);
					foreach ($msg as $item) {
						$output .= PHP_EOL."     *  $item";
						unset($item);
					}
				} elseif($type == 'ORDERED_LIST') {
					$item_num = 0;
					foreach ($msg as $item) {
						$item_num++;
						$output .= PHP_EOL."     $item_num)  $item";
						unset($item);
					}
				} elseif($type == 'NAMED_LIST') {
					unset($item,$item_name);
					foreach ($msg as $item_name => $item) {
						$output .= PHP_EOL."     [$item_name] => $item";
						unset($item,$item_name);
					}
				} else {
					$output .= PHP_EOL."   [$type] $msg";
				}
			}
		} else {
			$output .= PHP_EOL.'#### No Tests Done ####';
		}
		$output .= PHP_EOL.PHP_EOL.'#### All Tests Completed ####'.PHP_EOL
		.$this->passed.' Passed - '.$this->warning.' Warnings - '.$this->failed.' Failed'.PHP_EOL
		.$this->bonus_points.' Bonus Points Awarded'.PHP_EOL;
		echo $output;
		exit($this->failed);
	}
}






