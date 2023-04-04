<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>


    <body>
        
        <div>
            <label for="searchBar">Search</label>
            <input type="text" name="searchNm" id="srchNm">
            <input type="submit" value="Look...">
        </div>

                <?php 
            $config = new PDO("mysql:host=localhost; dbname=university_rankings",'root','');

            if(isset($_POST["submit"])) {
                $serchName = $_POST["searchNm"];
                $data = $config -> prepare("SELECT * FROM `university_rankings` WHERE Name LIKE '$serchName'");

                $data -> setFetchMode(PDO::FETCH_OBJ);
                $data -> execute();

                if($row = $data -> fetch()){
                    ?>

                    <br><br><br>

                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Rating</th>
                            <th>Location</th>
                        </tr>
                        <tr>
                            <td><?php echo $row -> Name; ?></td>
                            <td><?php echo $row -> Rank; ?></td>
                            <td><?php echo $row -> Rating; ?></td>
                            <td><?php echo $row -> Location; ?></td>
                        </tr>
                    </table>

                <?php
                }
                else{
                    echo "Error Occored";
                }
            } else{
                
            }

        ?>
        
    </body>
</html>