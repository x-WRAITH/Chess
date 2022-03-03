<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<?php
if(ISSET($_GET['submode'])){
            if($_GET['submode']=='imie, nazwisko'){
            $q="SELECT imie='{$_GET['Imie']}', nazwisko='{$_GET['Nazwisko']}' FROM szachy ORDER BY Punkty DESC";
            }} else {
            $q="SELECT * FROM szachy ORDER BY Punkty DESC";
            }
            $result=$connect->query($q);
            echo<<<html
            <table class="table-chess">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Imie</td>
                        <td>Nazwisko</td>
                        <td>Punkty</td>
                        <td>Wygrane</td>
                        <td>Przegrane</td>
                        <td>Remisy</td>
                    </tr>
                </thead>
            html;
            while($row=$result->fetch_object())
                {
                echo<<<html
                    <tbody class="ranks">
                        <tr>
                            <td>$row->id</td>
                            <td>$row->Imie</td>
                            <td>$row->Nazwisko</td>
                            <td>$row->Punkty</td>
                            <td>$row->Wygrane</td>
                            <td>$row->Przegrane</td>
                            <td>$row->Remisy</td>
                        </tr>
                    </tbody>
                html;   
                }
                echo "</table>";
                $result->free_result();  
?>