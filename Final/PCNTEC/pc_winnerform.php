<?php include 'connection.php'; ?>
<?php
session_start();
if(isset($_POST['optradio'])){
  $bidderid= $_POST['optradio'];
  //$result = mysqli_query($conn, $sql);

}
$numv= $_SESSION["pcnum"];
//echo $numv;
for ($num=1; $num <$numv ; $num++) {
  if (isset($_POST["submit".$num])) {
    $des= $_POST["description".$num];
    $tenid=$_SESSION["tenderid".$num];
  }
}
$sql2="UPDATE `bid` SET `Status` = '2',`Description` = '$des' WHERE  `bid`.`TenderID` = '$tenid'";
$result1=mysqli_query($conn, $sql2);

$sql1="UPDATE `bid` SET `Status` = '1' WHERE `bid`.`BidderID` = '$bidderid' AND `bid`.`TenderID` = '$tenid'";
$result = mysqli_query($conn, $sql1);
if($result){
  $_SESSION['winflash']="Done!";
  header('Location: pc_winner.php');
}

 ?>
