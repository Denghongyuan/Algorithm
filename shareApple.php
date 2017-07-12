<?php
/**
 * 有5个人偷了一堆苹果，准备在第二天分赃。晚上，有一人遛出来，把所有菜果分成5份，但是多了一个，顺手把这个扔给树上的
 * 猴了，自己先拿1/5藏了。没想到其他四人也都是这么想的，都如第一个人一样分成5份把多的那一个扔给了猴，偷走了1/5。第
 * 二天，大家分赃，也是分成5份多一个扔给猴了。最后一人分了一份。问：共有多少苹果？
 */

/**
 * 该方法是根据最后每人平均分配的苹果求值
 */
function appleShare()
{
	$avarage = 1;
	$total = $avarage * 5;
	$times = 0;
	$share_times = 1;
	while ($share_times < 6) {
		if (is_int($total * 5/4)) {
			$total = $total*5/4 +1; 
			$share_times++;
		} else {
			$share_times = 1;
			$avarage++;
			$total = $avarage * 5;
		}
		$times++;
	}
	echo 'query_times : '.$times.'<br>';
	echo 'total apples : '.$total;
}

/**
 * 该方法是根据总苹果数求值
 */
function appleShare2()
{
	for ($i = 1; ; $i++)
	{
	    if ($i%5 == 1) {
	        //第一个人取五分之一，还剩$t
	        $t = $i - round($i/5) - 1;      
	        if($t % 5 == 1)
	        {
	            //第二个人取五分之一，还剩$r
	            $r = $t - round($t/5) - 1;      
	            if($r % 5 == 1)
	            {
	                //第三个人取五分之一，还剩$s
	                $s = $r - round($r/5) - 1;              
	                if($s % 5 == 1)
	                {
	                    //第四个人取五分之一，还剩$x
	                    $x = $s - round($s/5) - 1;                  
	                    if($x % 5 == 1)
	                    {
	                        //第五个人取五分之一，还剩$y
	                        $y = $x - round($x/5) - 1;                      
	                        if ($y % 5 == 0) {
	                            echo 'total apples : '.$i;
	                            break;
	                        }
	                    }
	                }
	            }
	        }
	    }
	}
}


appleShare();
echo '<br>';
appleShare2();;

?>
