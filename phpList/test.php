<?php

require_once('ArrayList.php');

use phpList\ArrayList;

/**
 * 用循环单链表解决约瑟夫问题
 */
function Josephus($list)
{
	$limit = 7;
	$start = 0;
	$head = $list->head;
	$p = $head->next;
	while ($list->length > 1) {
		if ($start == $limit - 1) {
			if ($p->next == $head) {
				echo 'kill '.$head->next->data.'<br>';
				$head->next = $head->next->next;
				$p = $head;
			} else {
				echo 'kill '.$p->next->data.'<br>';
				$p->next = $p->next->next;
			}
			$list->length--;
			$start = 1;
		} else {
			$start++;
		}
		$p = $p->next;
		if ($p == $list->head) {
			$p = $p->next;
		}
	}
	echo '<pre>';
	var_dump($list);die;
	echo '</pre>';
}

$monkeys = ['king', 'mon1', 'mon2', 'mon3', 'mon4', 'mon5', 'mon6', 'mon7', 'mon8'];
$list = new ArrayList();
foreach ($monkeys as $k => $v) {
	$list->addNode($v);
}
// echo '<pre>';
// var_dump($list);die;
// echo '</pre>';
Josephus($list);



?>