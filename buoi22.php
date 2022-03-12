<?php
    // Nối chuỗi 
    $a = "haha";
    $b = "hehe";

    // cách 1:
    // Dùng dấu chấm
    $c = $a . ' ' . $b;
    echo $c;
    echo "<br>";

    // Cách 2:
    // Dùng nháy đôi ""
    // Không dùng nháy đơn
    $c = "$a $b";
    echo $c;
    echo "<br>";

    // Cách 3:
    // Dùng sprintf
    // %s: là chuỗi (string)
    // %d: số (digit)
    $c = sprintf("%s %s con vịt %d", $a, $b, 100);// Gía trị của $a thay thế cho %s đầu tiên,tới giá trị của $b sẽ thay thế %s số 2. Cuối cùng là 100 sẽ thay cho %d
    echo $c;

    // Cộng dồn
    $x = 5;
    $x = $x + 7; //12 (recommend)

    $y = 5;
    $y += 7; //12

    //  tăng lên 1 đơn vị
    $t = 5;
    $t++; //6 (recommend)

    // Nối chuỗi dồn
    $s1 = "Tèo em";
    $s1 .= " Đẹp quá";// Tèo em đẹp qua
    echo "<br>";
    echo $s1;

    // Mảng - array - list (danh sách)
    // 2 loại: numric array(array thường)
    $arr = [0 => 5, 1 => 7, 2 => 4];//viết dài dòng
    $arr = [5, 7, 4];// viết gọn (recommend)

    // associative array (array kết hợp)
    // key là chuỗi
    //  array thường khác array kết hợp ở chỗ kiểu dữ liệu của key
    // array kết hợp mang nhiều thông tin hơn so với array thường
    $arr = ["toan" => 5, "ly" => 7, "hoa" => 4];
    echo "<br>";
    echo $arr["ly"];

    // array 1 chiều
    // phần tử bên trong nó không là array
    $arr = [5, 7, 4];//array 1 chiều
    var_dump($arr);

    $arr = ["toan" => 5, "ly" => 7, "hoa" => 4];//array 1 chiều kết hợp

    // array 2 chiều
    // phần tử bên trong nó là array
    $arr = [[5, 7, 1], [9, true, "haha", "hehe"]];//array thường 2 chiều
    var_dump($arr);
    echo $arr[1][2];//hâha
    $arr = [
        "minh" => [5, 7, 4],
        "duc" => [6, 4, 3],
        "doan" => [9, 3, 7]
    ];// array kết hợp 2 chiều

    var_dump($arr);
    echo $arr["duc"][2];

    // vòng lặp for
    // count() là hám số đếm số lượng phần tử trong array (giống length trong js)
    $arr = [4, 5, 7];
    $sum = 0;
    for($i = 0; $i <= count($arr) - 1; $i++ ) {
        $sum += $arr[$i];
    }
    echo "<br>";
    echo $sum;

    //vòng lặp foreach
    $arr = ["toan" => 5, "ly" => 7, "hoa" => 4];
    // tính tổng
    $sum = 0;
    foreach ($arr as $mon => $diem) {
        $sum += $diem;
    }
    echo "<br>";
    echo $sum;

    //vòng lặp foreach rút gọn key
    $arr = ["toan" => 5, "ly" => 7, "hoa" => 4];
    // tính tổng
    $sum = 0;
    foreach ($arr as $diem) {
        $sum += $diem;
    }
    echo "<br>";
    echo $sum;

    // từ khóa break; // thoát khỏi vòng lặp
    $arr = [3, 5, 4, 7, 2, 6];
    // BT: tính tổng array từ trái sang phải, gặp 7 cộng, nhưng giá trị phía sau số 7 không cộng
    // KQ: 19
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
        if ($value == 7) {
            break;//thoát khỏi vòng lặp foreach
        }
    }
    echo "<br>";
    echo $sum;

    // từ khóa continue (kết thúc vòng lặp hiện tại, chạy vòng lặp tiếp theo)
    $arr = [3, 5, 4, 7, 2, 6];
    // BT: tính tổng các con số lẻ
    // KQ: 15
    $sum = 0;
    foreach ($arr as $value) {
        if ($value % 2 == 0) {
            
            continue;// sô chẵn sẽ không cộng (không chạy code phía dưới), và cahyj vòng lặp tiếp theo
        }
        $sum += $value;
    }
    echo "<br>";
    echo $sum;

    // hàm
    function tong($a, $b) {
        $c = $a + $b;
        return $c;
    }

    $x = 5;
    $y = 7;
    echo "<br>";
    echo tong($x, $y);//12

    $x1 = 2;
    $y1 = 3;
    echo "<br>";
    echo tong($x1, $y1);//5

    $m = 10;
    // Truyền tham trị
    function f1($x) {
        $x++;
    }
    f1($m);
    echo "<br>";
    echo $m;
    // Truyền tham chiếu
    $m = 10;
    function f2(&$x) {
        $x++;
    }
    f2($m);
    echo "<br>";
    echo $m;
?>

<?php 
    $a = "hihi";
    $b = "hihi";
    $c = "$a $b";
    echo $c;
    echo "<br>";
    $c = sprintf("%s %s", $a, $b);
    echo $c;

    $arr = [4, 6, 7, 8, 9];
    $sum = 0;
    for ($i = 0; $i <= count($arr) - 1; $i++) {
        $sum += $arr[$i];
        if ($arr[$i] == 8) {
            break;
        }
    }
    echo "<br>";
    echo $sum;

    $arr = [4, 6, 7, 8, 9];
    $sum = 0;
    for ($i = 0; $i <= count($arr) - 1; $i++) {
        if ($arr[$i] % 2 != 0) {
            continue;
        }
        $sum += $arr[$i];
    }
    echo "<br>";
    echo $sum;

    $m = 11;
    function f3(&$x) {
        $x++;
    }
    f3($m);
    echo $m;

?>