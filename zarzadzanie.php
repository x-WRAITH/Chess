<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<?php
if(ISSET($_GET['submode'])){
            if($_GET['submode']=='imie, nazwisko'){
            $q="SELECT * FROM szachy WHERE imie='{$_GET['Imie']}', nazwisko='{$_GET['Nazwisko']}'";
            }} else {
            $q="SELECT * FROM szachy";
            }
            $result=$connect->query($q);
            echo<<<html
            <table class="table-chess">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Imie</td>
                        <td>Nazwisko</td>
                    </tr>
                </thead>
            html;
            while($row=$result->fetch_object())
                {
                echo<<<html
                    <tbody>
                        <tr>
                            <td>$row->id</td>
                            <td>$row->Imie</td>
                            <td>$row->Nazwisko</td>
                            <td><a href='index.php?mode=modyfikuj&id={$row->id}'>Modyfikuj</a></td>
                            <td><a href='index.php?mode=usun&id={$row->id}' onclick="return confirm('Czy na pewno chcesz usunąć tą osobę?')">Usuń</a></td>
                        </tr>
                    </tbody>
                html;   
                }
                echo "</table>";
                $result->free_result();  
?>