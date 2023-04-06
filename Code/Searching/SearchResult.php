<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AcceptAssist | Search Results </title>
        <link rel="stylesheet" href="navbarFooter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="naviBar">
            <div class="naviContainer">
                <div class="naviLogo">
                    <a href="../Start/start.html"><img src="../Account/Resources/AcceptAssistWFTR.png" alt="" srcset="AcceptAssist Logo" class="naviImgLogo"></a>
                </div>

                <div class="naviListMenu">
                    <div class="naviMenuItem"><a href="../Start/start.html">Home</a></div>
                    <div class="naviMenuItem"><a href="../UserPage/userscore.php">Get Predict</a></div>
                    <div class="naviMenuItem"><a href="../Universities_List/database.php">Universities List</a></div>
                    <div class="naviMenuItem"><a href="#">Search Universities</a></div>
                    <div class="naviMenuItem"><a href="../Start/start.html#team">Team</a></div>
                    <div class="naviMenuItem"><a href="../Start/start.html#contact">Contact</a></div>
                    <div class="naviMenuItem"><a href="../Account/User_Page.php"><i class="material-symbols-outlined">account_circle</i></a></div>
                </div>
            </div>
        </div>
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
                                            $query = "SELECT * FROM university_rankings WHERE Name LIKE '%$filtervalues%' ";
                                            $query_run = mysqli_query($con, $query);

                                            if(mysqli_num_rows($query_run) != false)
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
        <footer>
          <div class="footerArea">
              <div class="ftColumn" id="c1">
                  <header>USEFUL LINKS</header>

                  <div><a href="#">Home</a></div>                <!-- Add Link Here-->
                  <div><a href="#">Resoucers</a></div>           <!-- Add Link Here-->
                  <div><a href="#">About</a></div>               <!-- Add Link Here-->
                  <div><a href="#">Contact</a></div>             <!-- Add Link Here-->
              </div>

              <div class="ftColumn" id="c2">
                  <span>Get Late's news...</span>
                  <header>NEWSLETTER</header>

                  <form action="#">
                      <div class="ftInput">
                          <input type="email" name="ftEmail" id="ftInput" placeholder="Enter Your Email Here">
                          <i class="material-symbols-outlined" id="ft_fa_mail"> mail </i>
                      </div>
                      <div class="ftSubmit">
                          <input type="submit" value="Subscribe Now" id="ftSubmit">
                      </div>
                  </form>
              </div>

              <div class="ftColumn" id="c3">
                  <header>CONTACT</header>

                  <div class="cIn">
                      <div>Team Backout,</div> 
                      <div>No.10, Trelawney Place, </div>
                      <div>Colombo 04, </div>
                      <div>Sri Lanka. </div>
                  </div>

                  <div class ="icon_links">
                      <div class="addFT">
                          <div class="iconIns">
                              <a href="#">                <!-- Add instagram Link Here-->
                                  <i class="fa fa-instagram"></i>
                              </a>
                          </div>

                          <div class="iconIns">
                              <a href="#">                <!-- Add facebook Link Here-->
                                  <i class="fa fa-facebook"></i>
                              </a>
                          </div>

                          <div class="iconIns">
                              <a href="#">                <!-- Add Twitter Link Here-->
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </div>
                      </div>
                  </div>

              </div>

          </div>
        </footer>
    </body>
</html>