<?php
$conn = mysqli_connect('localhost','root','nhk123','texteditor');
$name="";

if (isset($_GET['name'])) {
    $name = $_GET['name'];

    $s_check = "SELECT * from content where name='".$name."'";
    $s_query = mysqli_query($conn,$s_check);
    $s_num = mysqli_num_rows($s_query);

    if ($s_num>0){
        session_start();
        $_SESSION['name'] = $name;
    }
    else die('Error!');
}
else die('Error!');

$sql = "SELECT * from content where name='".$name."'";
$query = mysqli_query($conn,$sql);
$dt = mysqli_fetch_array($query);

require('html/display.html');
echo "<script>
txt.value='".$dt['content']."';

font.value='".$dt['font']."';
txt.style.fontFamily = '".$dt['font']."';
font.style.fontFamily = '".$dt['font']."';

size.value = '".$dt['size']."';
txt.style.fontSize = '".$dt['size']."px';

boldF[0].value='".$dt['bold']."';
bold.checked=Boolean(".$dt['bold'].");
if (bold.checked) txt.style.fontWeight = 'bold';

italicF[0].value='".$dt['italic']."';
italic.checked=Boolean(".$dt['italic'].");
if (italic.checked) txt.style.fontStyle = 'italic';

spellF[0].value='".$dt['spellcheck']."';
spellcheck.checked=Boolean(".$dt['spellcheck'].");
if (spellcheck.checked) txt.spellcheck = true;
</script>";

$conn->close();
?>