<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<?php
if($_GET['mode']=='dodaj')
{
    echo<<<html
    <div class="form-style">
        <h1>Dodawanie Gracza</h1>
        <form method="GET" action="index.php">
            <input type="text" name="imie" placeholder="np. Jan">
            <input type="text" name="nazwisko" placeholder="np. Kowalski">
            <input type="hidden" name="mode" value="dodaj">
            <input type="submit" value="Prześlij">
        </form>
    </div>
    html;  
    if(isset($_GET['imie'])&&isset($_GET['nazwisko'])) {

        $name=$_GET['imie'];
        $surname=$_GET['nazwisko'];
        $query_add="INSERT INTO szachy (Imie,Nazwisko) 
                VALUES ('$name','$surname')";
        //$connect->query($query_add);
        if($connect->query($query_add)){
            echo "<label>Przesyłano: ".$_GET['imie']." ".$_GET['nazwisko']."</label>";}
    }
}
?>