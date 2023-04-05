<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>AcceptAssist | Search Results </title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>University</th>
                                        <th>Rating</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $con = mysqli_connect("localhost","root","","AcceptAssistDatabase");

                                        if(isset($_GET['search']))
                                        {
                                            $filtervalues = $_GET['search'];
                                            $query = "SELECT * FROM universityRankings WHERE Name LIKE '%$filtervalues%' ";
                                            $query_run = mysqli_query($con, $query);

                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                                foreach($query_run as $items)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?= $items['Name']; ?></td>
                                                        <td><?= $items['Rank']; ?></td>
                                                        <td><?= $items['Rating']; ?></td>
                                                        <td><?= $items['Locations']; ?></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                    <tr>
                                                        <td colspan="4">No Record Found</td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    </body>
</html>