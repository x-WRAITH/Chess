<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<?php
if($_GET['mode']=='usun')
{
    $query_del="DELETE FROM szachy WHERE id={$_GET['id']}";
    $connect->query($query_del);
    header('Location: index.php?mode=zarzadzanie');
}
?>