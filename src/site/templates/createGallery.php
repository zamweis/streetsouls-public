<?php
// connect to database
include 'templates/connectdb.php';

// prepare and execute query
if ($connection != false) {
    $stmt = $connection->prepare('SELECT dogs.id, dogs.name, description.content, race.content FROM dogs, description, race WHERE dogs.id=description.id AND description.language="' . $lang . '" AND race.id=dogs.race_id AND race.language="' . $lang . '";');
    $stmt->execute();

    // get the mysqli result
    $result = $stmt->get_result();
    $counter = 0;
    $firstColumn = '';
    $secondColumn = '';

} else {
    die("Connection not open: " . $connection->connect_error);
}
// loop through the result
while ($row = mysqli_fetch_array($result)) {
    $dog_id = $row[0];
    $dog_name = utf8_encode($row[1]);
    $description = utf8_encode($row[2]);
    $race = utf8_encode($row[3]);
    // Generate the gallery according to the existing dogs
    $box =
        '<div class="box shadow">
            <div class="image fit"> 
                <a id="link" href="javascript:showAnimal(' . $dog_id . ', \'' . $dog_name . '\')"><img src="images/dogs/' . $dog_id . '/' . $dog_id . '_1.jpg" id="' . $dog_name . '" alt=""/></a>
            </div>
            <div class="content">
                <header class="align-center">
                    <p>' . $race . '</p>
                    <h2>' . $dog_name . '</h2>
                </header>
                <p class="item">' . $description . '</p>
                <footer class="align-center"> 
                    <a href="javascript:showAnimal(' . $dog_id . ', \'' . $dog_name . '\')" class="button alt">' . json_decode(file_get_contents('text/gallery.json'))->morePhotos->$lang . '</a> 
                </footer>
            </div>
        </div>';

    if ($counter == 0) {
        $firstColumn .= $box;
        $counter++;
    } else {
        $secondColumn .= $box;
        $counter--;
    }
}
echo '<div class="flex">' .
    $firstColumn .
    '</div>' .
    '<div class="flex">' .
    $secondColumn .
    '</div>';
mysqli_close($connection);
?>