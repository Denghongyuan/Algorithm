<?php

namespace phpList;

require_once('Node.php');

use phpList\Node;
/**
* 循环单链表
*/
class ArrayList
{
	public $head;
	public $length;

	/**
	 * 初始化
	 */
	function __construct()
	{
		$this->head = new Node();
		$this->head->next = $this->head;
		$this->length = 0;
	}

	/**
	 * @param $data [节点值]
	 */
	public function addNode($data)
	{
		$head = $this->head;
		if ($head->next == $head) {
			$this->head->next = new Node($data,$this->head);
		} else {
			$p = $head->next;
			while ($p->next != $this->head) {
				$p = $p->next;
			}
			$q = $p->next;
			$p->next = new Node($data, $q);
		}
		$this->length++;
	}	

	/**
	 * 删除节点
	 */
	public function removeNode($pos)
	{
		$p = $this->head;
		while ($pos > 1) {
			$p = $p->next;
			$pos--;
		}
		$p->next = $p->next->next;
		$this->length--;
	}

	/**
	 * 清空链表
	 */
	public function emptyList()
	{
		$this->head = new Node(null,null);
	}

	/**
	 * 打印链表
	 */
	public function stringList()
	{
		$p = $this->head->next;
		if ($this->head->next == $this->head) {
			echo 'Warn:there is no node in the list';
			exit();
		}
		while ($p != $this->head) {
			echo '<pre>';
			var_dump($p->data);
			echo '</pre>';
			$p = $p->next;
		}
	}
}

?>