<?php
namespace phpList;

/**
* 节点类
*/
class Node
{
	public $data;
	public $next;
	function __construct($data = null, $next = null)
	{
		$this->data = $data;
		$this->next = $next;
	}

	public function getData()
	{
		return $this->data;
	}
}