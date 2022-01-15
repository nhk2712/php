<?php
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $school=$_POST['school'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $fb=$_POST['fb'];
    $exp=$_POST['exp'];
    $why=$_POST['why'];
    $depart=$_POST['depart'];

    session_start();

    $_SESSION['name']=$name;
    $_SESSION['dob']=$dob;
    $_SESSION['school']=$school;
    $_SESSION['phone']=$phone;
    $_SESSION['email']=$email;
    $_SESSION['fb']=$fb;
    $_SESSION['exp']=$exp;
    $_SESSION['why']=$why;

    if($name=="" or $dob=="" or $school=="" or $phone=="" or $email=="" or $fb=="" or $exp=="" or $why=="" or $depart=="-- Chọn ban --")
    {
        echo "<script>alert('Bạn có thông tin bắt buộc chưa điền!');history.back();</script>";
    }

    if ($depart=="Nội dung")
    {
        include 'noidung.html';
    }

    if ($depart=="Hậu cần")
    {
        include 'hc.html';
    }

    if ($depart=="Tài chính - Đối ngoại")
    {
        include 'tcdn.html';
    }

    if ($depart=="Truyền thông")
    {
        include 'pr.html';
    }

    if ($depart=="Media")
    {
        include 'med.html';
    }

    if ($depart=="Design")
    {
        include 'des.html';
    }

?>

<body style="background-image: url('dotbg.jpg');">

</body>