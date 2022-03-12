<?php 
// Hàm count
// Array thường
$a1 = array(4, 5, 7, 9, 12); //[4, 5, 7, 9, 12]
$size = count($a1);
echo "Kích thước array thường " . $size;
echo "<br>";

// Array 2 chiều
$a2 = array(
	"nga" => array("toan" => 7, "ly" => 4, "hoa" => 8.5),
	"nam" => array("toan" => 4, "ly" => 2, "hoa" => 3.5),
	"nhan" => array("toan" => 7, "ly" => 5, "hoa" => 9.5),
);
$size = count($a2);
echo "Kích thước array 2 chiều " . $size;
echo "<br>";
// Thêm 1 phần tử vào cuối array 
// Cách 1
$a3 = array(4, 5, 7, 9, 12);
array_push($a3, 11);
echo "Phần tử số 11 được thêm vào cuối array a3";
var_dump($a3);//4, 5, 7, 9, 12, 11

// Cách 2
$a4 = array(4, 5, 7, 9, 12);
$a4[] = 11;//thêm phần tử có giá trị 11 vào cuối array $a4
var_dump($a4);

// Lấy 1 phần tử cuối ra khỏi array
$a5 = array(4, 5, 7, 9, 12);
$e = array_pop($a5);// e sẽ là 12
echo "Phần tử cuối của array là: ". $e;
var_dump($a5);//4,5, 7, 9

// Thêm 1 phần tử vào đầu array
$a6 = array(4, 5, 7, 9, 12);
array_unshift($a6, 3);
echo "Phần tử số 3 được thêm vào đầu array a6";
var_dump($a6);

// Lấy 1 phần tử đầu ra khỏi array
$a7 = array(4, 5, 7, 9, 12);
$e = array_shift($a7);
echo "Phần tử đầu của array là: ". $e;
echo "<br>";
echo "Giá trị của a7 sau khi lấy 1 phần tử đầu tiên";
var_dump($a7);

// Chèn, xóa, thay thế bất kỳ vị trí nào trong array
// $removed_array = array_splice($a8, $start, $length, $added_array);
// $x = array_splice($a8, 2, 2, array());
echo "<br> a8";
$a8 = array(7, 4, 6, 2, 5); 
$x = array_splice($a8, 2, 2, ["a", "b", "c"]);
var_dump($a8);//7 4 a b c 5
var_dump($x);//6, 2

$a8 = array(7, 4, 6, 2, 5);
$array_removed = array_splice($a8, 2, 2, array(9, 12, 15));
var_dump($a8);
var_dump($array_removed);

// Ví dụ: xóa
$a9 = array("a", "b", "c", "d", "e");
$array_removed = array_splice($a9, 1, 2, array());
var_dump($a9);//a, d, e
var_dump($array_removed);//b, c

// Ví dụ: thêm - chèn trước chỉ số 4
$a10 = array("a", "b", "c", "d", "e");
$array_removed = array_splice($a10, 4, 0, array("f"));
var_dump($a10); //a, b, c, d, f, e
var_dump($array_removed);//array rỗng

// Ví dụ: cập nhật
echo "cập nhật a11";
$a11 = array("a", "b", "c", "d", "e");
$array_removed = array_splice($a11, 2, 1, array("t"));
var_dump($a11);//a, b, t, d, e
var_dump($array_removed);//c

// Hàm in_array
$a12 = array("a", "b", "c", "d", "e");
$e = "b";

if (in_array($e, $a12)) {
	echo "Chữ $e có nằm trong array a12";
}
else {
	echo "Chữ $e không có nằm trong array a12";
}
echo "<br>";

// Hàm array_key_exists
$a13 = array("toan" => 3, "ly" => 2, "hoa" => 7);
$key = "toan";
if (array_key_exists($key, $a13)) {
	echo "key $key có nằm trong array a13";
}
else {
	echo "key $key không có nằm trong array a13";
}

// Hàm array_count_values
$a14 = array("a", "b", "c", "d", "e", "b");
$duplicated_array = array_count_values($a14);
var_dump($duplicated_array);

// Hàm array_sum & array_product
$a15 = array(7, 4, 6, 2, 5);
echo "Tổng: " . array_sum($a15);
echo "<br>";
echo "Tích: " . array_product($a15);


// Hàm array_merge();
$a16 = array(7, 4, 6);
$a17 = array(2, 5);
$a18 = array_merge($a16, $a17);
var_dump($a18);//7, 4, 6, 2, 5

//is_array
$a19 = array(2);
if (is_array($a19)) {
	echo "Nó là array";
}
else {
	echo "Nó không phải là array";
}
echo "<br>";

// array_unique
$a20 = array("a", "b", "c", "d", "e", "b", "b");
$a21 = array_unique($a20);
var_dump($a21);

// array_values
$a22 = array("toan" => 3, "ly" => 2, "hoa" => 7);
$a23 = array_values($a22);
var_dump($a23);

// array_keys
$a24 = array("toan" => 3, "ly" => 2, "hoa" => 7);
$a25 = array_keys($a24);
var_dump($a25);

// array_reverse
$a26 = array("a", "b", "c", "d", "e");
$a27 = array_reverse($a26);
var_dump($a27);

$t = [100, 200, 300];
// $x = $t[0];
// $y = $t[1];
// $z = $t[2];
list($x, $y, $z) = $t;
echo $x;
echo "<br>";

// array_search
$a28 = array("toan" => 3, "ly" => 2, "hoa" => 3);
$key = array_search(2, $a28);
echo "Key tìm thấy là: " . $key;

// sort - sắp xếp tăng dần
$a29 = array(10, 5, 7, 9, 11);
sort($a29);
var_dump($a29);


// rsort - reverse sort - sắp xếp giảm dần
$a30 = array(10, 5, 7, 9, 11);//numric array
rsort($a30);
var_dump($a30);

// asort - associative array
$a31 = array("toan" => 3, "ly" => 2, "hoa" => 7,);
asort($a31);
var_dump($a31);

// ksort - key sort
$a32 = array("tx" => 3, "ly" => 2, "hoa" => 7, "toan1" => 3, "toan2" => 3,);
ksort($a32);
var_dump($a32);

// arsort
$a33 = array("toan" => 3, "ly" => 2, "hoa" => 7);
arsort($a33);
var_dump($a33); //"hoa" => 7, "toan" => 3, "ly" => 2

// krsort
$a34 = array("toan" => 3, "ly" => 2, "hoa" => 7);
krsort($a34);
var_dump($a34);//"toan" => 3, "ly" => 2, "hoa" => 7

// $fullname = $a35[0] . " " . $a35[1] . " " . $a35[2];
// $ten = "";
// for($i = 0; $i < count($a35); $i++) {
// 	if (!$ten) {
// 		$ten = $a35[$i];
// 	}
// 	else {
// 		$ten = $ten . " " . $a35[$i];
// 	}
	
// }
// echo $ten; 
// //i = 3
// //ten = "Nguyen"
$a35 = array("Nguyễn", "Văn", "Nam");
//khắc nhập
$fullname = implode(" ", $a35);//Nguyễn Van Nam
echo $fullname;

// Toán tử 3 ngôi

$a = 5;
if ($a > 4) {
	$b = 1;
}
else {
	$b = 2;
}
echo "<br>";
echo $b;
echo "<br>";

$b = $a > 4 ? 1 : 2;
echo $b;

// Hàm usort : user define
$a36 = [5, 4, 9, 3];
usort($a36, function($a, $b){
	if ($a == $b) {
		return 0;
	}

	return $a > $b ? -1 : 1;
});

var_dump($a36);

$a37 = [
	[3, 5, 4, 2], //14
	[2, 1, 4, 0], //7
	[9,3] //12
];
//Sắp tổng tăng dần
usort($a37, function($arr1, $arr2) {
	if (array_sum($arr1) == array_sum($arr2)) {
		return 0;
	}

	return array_sum($arr1) < array_sum($arr2) ? -1: 1;
});
var_dump($a37);


$a37 = [
	[3, 5, 4, 2], //3
	[2, 1, 4, 0], //2
	[9,3] //9
];
// $arr1[0];
//Sắp phần tử đầu tiên tăng dần
usort($a37, function($arr1, $arr2) {
	if ($arr1[0] == $arr2[0]) {
		return 0;
	}

	return $arr1[0] < $arr2[0] ? -1: 1;
});
var_dump($a37);

$a38 = [
	[3, 5, 4, 2], //4
	[2, 1, 4, 0, 1], //5
	[9,3] //2
];
// 
//Sắp số lượng phần tử tăng dần
usort($a38, function($arr1, $arr2) {
	if (count($arr1) == count($arr2)) {
		return 0;
	}

	return count($arr1) < count($arr2) ? -1: 1;
});
var_dump($a38);