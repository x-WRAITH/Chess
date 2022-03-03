<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<?php
error_reporting(E_ALL & ~E_NOTICE); // wyswietla all poza notice bo sa zbedne
if($_GET['mode']=='modyfikuj')
{
    echo "<label>Przesłane ID: ".$_GET['id']."</label>";

    $query="SELECT * FROM szachy WHERE id='{$_GET['id']}'";
    $result=$connect->query($query);
    $row=$result->fetch_object();

    echo<<<html
    <div class="form-style">
    <h1>Modyfikacja Gracza</h1>
    <form method="GET" action="index.php">
        <label for="Imie">Imie</label>
        <input type="text" name="Imie" value="$row->Imie"><br>
        <label for="Nazwisko">Nazwisko</label>
        <input type="text" name="Nazwisko" value="$row->Nazwisko"><br>
        <label for="Punkty">Punkty</label>
        <input type="text" name="Punkty" value="$row->Punkty"><br>
        <label for="Wygrane">Wygrane</label>
        <input type="text" name="Wygrane" value="$row->Wygrane"><br>
        <label for="Przegrane">Przegrane</label>
        <input type="text" name="Przegrane" value="$row->Przegrane"><br>
        <label for="Remisy">Remisy</label>
        <input type="text" name="Remisy" value="$row->Remisy"><br>
        <input type="hidden" name="id" value="$row->id">
        <input type="hidden" name="mode" value="modyfikuj">
        <input type="hidden" name="action" value="modyfikuj">
        <input type="submit" value="Prześlij">
    </form>
    </div>
    html;
   if($_GET['action']=='modyfikuj') {
    $query_mod="UPDATE szachy SET Imie='{$_GET['Imie']}', Nazwisko='{$_GET['Nazwisko']}', Punkty='{$_GET['Punkty']}', Wygrane='{$_GET['Wygrane']}', Przegrane='{$_GET['Przegrane']}', Remisy='{$_GET['Remisy']}' WHERE id='{$_GET['id']}'";
    echo $query_mod;
    if($connect->query($query_mod)){
        header('Location: index.php?mode=wyswietl');}
   }
}
?>