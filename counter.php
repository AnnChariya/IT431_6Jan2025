<?php
    $link = mysqli_connect("localhost","root","1234");
    mysqli_set_charset($link,'utf8');
    mysqli_query($link,"Use roomm;");
    $sql = "select * from counter;";

    $result = mysqli_query($link,$sql);
    while ($dbarr = mysqli_fetch_array($result)){
        $pgcount = $dbarr["countnum"];
    }
    $pgcount = $pgcount + 1;
    $pgcount = "00000" . $pgcount;
    $pgcount = substr($pgcount, -12346);
    echo "$pgcount";

    $sql = "Update counter set countnum บีม อัคเรศ กรดเต็มIT431  = '$pgcount' where id = 1";
    $result = mysqli_query($link,$sql);
?>
