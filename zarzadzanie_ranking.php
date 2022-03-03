<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<?php
require_once('db_connect.php');
if(ISSET($_GET['submode'])){
            if($_GET['submode']=='imie, nazwisko'){
            $q="SELECT * FROM szachy WHERE imie='{$_GET['Imie']}', nazwisko='{$_GET['Nazwisko']}', punkty='{$_GET['Punkty']}', wygrane='{$_GET['Wygrane']}', przegrane='{$_GET['Przegrane']}', remisy='{$_GET['Remisy']}'";
            }} else {
            $q="SELECT * FROM szachy";
            }
            $result=$connect->query($q);
        
        if(isset($_POST["gracz_1"]) && isset($_POST["gracz_2"]) && isset($_POST["wynik"])){
            $graczid_1 = $_POST["gracz_1"];
            $graczid_2 = $_POST["gracz_2"];

            $gracz_1 = $connect->query("SELECT * FROM szachy WHERE id = $graczid_1")->fetch_object();
            $gracz_2 = $connect->query("SELECT * FROM szachy WHERE id = $graczid_2")->fetch_object();

            
            $amountpoints_1 = $gracz_1->Punkty;
            $amountwins_1 = $gracz_1->Wygrane;
            $amountdefeats_1 = $gracz_1->Przegrane;
            $amountdraws_1 = $gracz_1->Remisy;

            $amountpoints_2 = $gracz_2->Punkty;
            $amountwins_2 = $gracz_2->Wygrane;
            $amountdefeats_2 = $gracz_2->Przegrane;
            $amountdraws_2 = $gracz_2->Remisy;

            switch ($_POST["wynik"]){
                case 0:{
                    $amountpoints_1+=2;
                    $amountwins_1++;
                    $amountdefeats_2++;

                }break;
                case 1:{
                    $amountpoints_1++;
                    $amountdraws_1++;
                    $amountpoints_2++;
                    $amountdraws_2++;
                }break;
                case 2:{
                    $amountpoints_2+=2;
                    $amountwins_2++;
                    $amountdefeats_1++;
                }break;
            }
            $result1 = $connect->query("UPDATE szachy SET punkty = '$amountpoints_1', wygrane = '$amountwins_1', przegrane = '$amountdefeats_1', remisy = '$amountdraws_1' WHERE id = $graczid_1;");
            $result2 = $connect->query("UPDATE szachy SET punkty = '$amountpoints_2', wygrane = '$amountwins_2', przegrane = '$amountdefeats_2', remisy = '$amountdraws_2' WHERE id = $graczid_2;");
            
            header("Location: ./index.php?mode=zarzadzanie_ranking");
            }
            $options1 = "";
            $options2 = "";
	        $i = 0;
	        while ($row = $result->fetch_object()) {
		        $param1 = $i == 0 ? 'selected' : ($i == 1 ? 'hidden' : '');
		        $options1 .= "<option value='$row->id' $param1>$row->id. $row->Imie $row->Nazwisko</option>";
		        $param2 = $i == 1 ? 'selected' : ($i == 0 ? 'hidden' : '');
		        $options2 .= "<option value='$row->id' $param2>$row->id. $row->Imie $row->Nazwisko</option>";
		        $i++;
	        }



        echo<<<html
        <div class="form-style">
            <form method="POST" action="zarzadzanie_ranking.php">
                <h1>Wybierz gracza: 1</h1>
                    <select name="gracz_1">
                        $options1
                    </select>
                <h1>Wybierz gracza: 2</h1>
                    <select name="gracz_2">
                        $options2
                    </select>

                <label>Wygrywa gracz: 1</label><input type="radio" name="wynik" value="0">
                <label>Remis</label><input type="radio" name="wynik" value="1">
                <label>Wygrywa gracz: 2</label><input type="radio" name="wynik" value="2">
                <br><hr>
                <input type="submit" value="Zatwierdz">
            </form>
        </div>
        html;
?>