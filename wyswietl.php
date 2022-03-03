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
                        <td>Punkty</td>
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
                            <td>$row->Punkty</td>
                        </tr>
                    </tbody>
                html;   
                }
                echo "</table>";
                $result->free_result();  
?>