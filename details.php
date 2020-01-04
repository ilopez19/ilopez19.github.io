<?php
#parset("PHP File Header.php")

include 'www/header.php';
$page_title = "Album Details";
?>

<?php
// add code here
// this is the database being added to the includes and lets it connect
$host = 'localhost';
$login = 'phpuser';
$password = 'phpuser';
$database = 'topalbums';

//connect to the mysql server so that the connection even occurs
$conn = @new mysqli($host, $login, $password, $database);

if($conn->connect_errno) {
    $errno = $conn->connect_errno;
    $error = $conn->connect_error;
    exit("Connection to database failed: ($errno) $error");
}

//retrieve user id from a querystring variable
if(!filter_has_var(INPUT_GET, 'id')){
    echo "Error: user id was not found.";
    require_once 'www/footer.php';
    exit();
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//select statement (step 1)
$sql = "SELECT * FROM albumdetails WHERE album_id = $id";
$sql2 = "SELECT * FROM tracklist WHERE album_id = $id";

//execute the query (step 2)
$query = $conn->query($sql);
$query2 = $conn->query($sql2);

//Handle selection errors
if (!$query OR !$query2) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    //include the footer
    require_once ('www/footer.php');
    exit;
}

$album = $query->fetch_assoc();
?>
<div class="back">
    <div class="backL"><b><a class="title2" href="inventory.php" style="text-align: left; font-size: 25px; padding-left: 65px"><-</a></b></div>
    <div class="backR"><h2 class="title2">Details: <?php echo $album['Album']; ?></h2></div>
</div>
<hr>
<br>

<div id="info">
    <div class="left">
        <img src="<?php echo $album['album_img']; ?>" width="300px" height="300px" style="border:5px solid white; margin: auto;">
    </div>

    <div class="right">
        <table cellspacing="11">
            <tr>
                <th>Country:</th>
                <td><?php echo $album['Country']; ?></td>
            </tr>
            <tr>
                <th>Album:</th>
                <td><?php echo $album['Album']; ?></td>
            </tr>
            <tr>
                <th>Artist:</th>
                <td><?php echo $album['Artist']; ?></td>
            </tr>
            <tr>
                <th>Genre:</th>
                <td><?php echo $album['Genre']; ?></td>
            </tr>
            <tr>
                <th>Price:</th>
                <td>$<?php echo $album['Price']; ?></td>
            </tr>
            <tr>
                <th>Tracks:</th>

                <td><?php
                        echo "<p style='text-decoration: underline;'>", $album['Num_of_Tracks'], " Tracks</p>";
                        while(($track = $query2->fetch_assoc() )!==NULL) {
                                $each = explode("/", $track['track_name']);
                                $counter = 0;
                                while ($counter < count($each)) {
                                    echo $track['track_num'], ". ", $track['track_name'];
                                    echo "<br>";
                                    $counter++;
                                }
                        }
                     ?>
                </td>
            </tr>

            <!--Song and lyrics code by Izzy, php code block down-->
            <?php
               if($role == 1 OR $role == 2){
                    echo "<tr>";
                    echo "<th> Top Song:  </th>";
                    echo "<td>";
                    echo "<audio controls autoplay>";
                    echo "<source src='tracks/", $album['tracks'], "' type='audio/mpeg'>";
                    echo "</audio>";
                    echo "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo " <th> Lyrics to Top Song:  </th>";
                    echo "<td>";
                    echo "<a target='_blank' href='", $album['lyrics'], "'><input class='buttons' type='button' value='Lyrics'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>

            <tr>
                <th>Description:</th>
                <td><?php echo $album['Description']; ?></td>
            </tr>
        </table>
    </div>
    <div id="small">
        <a href="addtocart.php?id=<?= $id ?>">
            <img src="img/shopping.png" height="50px" width="50px"/>
            <p style="margin-top: 80px; margin-left: 70px">Add to Cart</p>
        </a>
    </div>

</div>
<?php

    if($role == 1){
        echo "<div align='center' style='background-color: #333333;'>";
        echo "<br>";
        echo "<form action='deletealbum.php' method='get'>";
        echo "<input type='button' class='buttons' onclick=\"window.location.href='editalbum.php?id=", $id, "'\" value='Edit'>&nbsp;";
        echo "<input class='buttons' type='submit' value='Delete' onclick='return confirm('Are you sure you want to delete the book?')' >&nbsp;";
        echo "<input class='buttons' type='button' value='Cancel' onclick=\"window.location.href='inventory.php'\" >";
        echo "<input type='hidden' name='id' value='", $id, "'>";
        echo "</form>";
        echo " <br>";
        echo "</div>";
    }

require_once('www/footer.php');
?>