<?php
    include 'header.inc.php';
?>
<?php
    if(!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
        header('Location:kassa.php');
        exit;
    }    
?>
<div class="container" style="width:500px;">
    <h3 align="left">Beveiligings meldingen</h3><br />
    <div class="table-responsive">
        <table class="table table-borderd">
            <tr>
                <th>Waar?</th>           
                <th>Wanneer?</th>
                <th>Melding:</th>
            </tr>
            <?php
            $data = file_get_contents('https://martenbiesheuvel.nl/hoornbeeckhelden/security_log.json');
            $data = json_decode($data, true);
            foreach ($data as $row) {
                echo '<tr><td>'.$row["camera"].'</td>';
                echo '<td>'.$row["datetime"].'</td>';
                echo '<td>'.$row["message"].'</td></tr>';
            }
            ?>
        </table>
    </div>
</div>    
 
</body>
</html>