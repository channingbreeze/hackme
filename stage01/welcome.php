<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Hack Me - 1</title>
</head>
<body>
	<?php
		$arr = array();
		$arr[0] = "小李";
		$arr[1] = "小张";
		$arr[2] = "小赵";
		$arr[3] = "小孙";
		$arr[4] = "小王";
		$arr[5] = "小陆";
		$arr[6] = "小周";
		$arr[7] = "小钱";
		$arr[8] = "小冯";
		$arr[9] = "小卫";
		$arr[10] = "小沈";
		$arr[11] = "小朱";
		$arr[12] = "小许";
		$arr[13] = "小吕";
		$arr[14] = "小严";
		$arr[15] = "小魏";
		$arr[16] = "小云";
		$arr[17] = "小潘";
		$arr[18] = "小凤";
		$arr[19] = "小郎";
		$arr[20] = "小奚";
		$arr[21] = "小韦";
		$arr[22] = "小昌";
		$arr[23] = "小花";
		$arr[24] = "小任";
		$arr[25] = "小酆";
		$arr[26] = "小鲍";
		$arr[27] = "小费";
		$arr[28] = "小廉";
		$arr[29] = "小岑";
		$arr[30] = "小傅";
		$arr[31] = "小皮";
		$arr[32] = "小卞";
		$arr[33] = "小湛";
		$arr[34] = "小禹";
		$arr[35] = "小狄";
		$arr[36] = "小项";
		$arr[37] = "小阮";
		$arr[38] = "小童";
		$arr[39] = "小梅";
		$arr[40] = "小刁";
		$arr[41] = "小虞";
		$arr[42] = "小支";
		$arr[43] = "小昝";
		$arr[44] = "小莫";
		$arr[45] = "小裘";
		$arr[46] = "小缪";
		$arr[47] = "小郁";
		$arr[48] = "小诸";
		$arr[49] = "小吉";
		$arr[50] = "小於";
		$arr[51] = "小惠";
		$arr[52] = "小麴";
		$arr[53] = "小甄";
		$arr[54] = "小乌";
		$arr[55] = "小暴";
		$arr[56] = "小钭";
		$arr[57] = "小戎";
		$arr[58] = "小郜";
		$arr[59] = "小欎";
		$arr[60] = "小舄";
		$arr[61] = "小温";
		$arr[62] = "小庄";
		$arr[63] = "小晏";
		$arr[64] = "小终";
		$arr[65] = "小蔚";
		$arr[66] = "小隆";
		$arr[67] = "小那";
		$arr[68] = "小饶";
		$arr[69] = "小毋";
		$arr[70] = "小养";
		$arr[71] = "小权";
		$arr[72] = "小盖";
		$arr[73] = "小公";
		$arr[74] = "小东方";
		$arr[75] = "小皇甫";
		$arr[76] = "小公羊";
		$arr[77] = "小令狐";
		$arr[78] = "小宇文";
		$arr[79] = "小太叔";
		$arr[80] = "小单于";
		$arr[81] = "小长孙";
		$arr[82] = "小鲜于";
		$arr[83] = "小闾丘";
		$arr[84] = "小司寇";
		$arr[85] = "小司空";
		$arr[86] = "小督";
		$arr[87] = "小颛孙";
		$arr[88] = "小端木";
		$arr[89] = "小公西";
		$arr[90] = "小漆雕";
		$arr[91] = "小公良";
		$arr[92] = "小拓拔";
		$arr[93] = "小晋";
		$arr[94] = "小楚";
		$arr[95] = "小法";
		$arr[96] = "小鄢";
		$arr[97] = "小涂";
		$arr[98] = "小微生";
		$arr[99] = "小海";
		$arr[100] = "万能的欣欣";
		$inArr = false;
		if(isset($_GET['ask']) && !empty($_GET['ask'])) {
			$name = $_GET['ask'];
			$inArr = in_array($name, $arr);
			if($inArr) {
				$curIndex = array_search($name, $arr);
				if($name != "万能的欣欣") {
					$nextIndex = $curIndex + 1;
					$nextName = $arr[$nextIndex];
				}
			}
		} else {
			$name = $arr[0];
			$nextName = $arr[1];
			$inArr = true;
		}
	?>
	<h1>Welcome To Stage 1</h1>
	<?php if($name == $arr[0]) {?>
		<p>这天玩命牛想找人请教一个问题。</p>
	<?php }?>
	<p>玩命牛：<?php echo $name;?>，你好，请问下怎么过本关啊？</p>
	<?php if($inArr) {
			if($name == "万能的欣欣") {
	?>
		<p><?php echo $name;?>：第二关地址在<a href="../stage02/notready.html">这里</a></p>
		<p>玩命牛：还是欣欣靠谱！</p>
	<?php
			} else {
	?>
		<p><?php echo $name;?>：这个问题我不熟，你可以请教<?php if($name == $arr[0]) {echo "<a href='?ask=" . $nextName ."'>" . $nextName . "</a>";} else {echo $nextName;}?></p>
	<?php
			}
	} else {
	?>
		<p><?php echo $name;?>：我们认识吗？！</p>
	<?php
	}
	?>
</body>