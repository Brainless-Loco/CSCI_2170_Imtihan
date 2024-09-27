<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 | Imtihan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php 
        include 'includes/header.php'; 
    ?>

    <div class='container-fluid px-0 mx-0 py-5 d-flex justify-content-center align-items-center border border-dark'>
        <div class="col-12 text-center">
            <h1>Welcome to My Assignment 1 Homepage</h1>
        </div>
    </div>

    <div class="col-12 bg-grey" >

        <div class="col-9 bg-white p-5 mx-auto">
            <div class="row py-2">
                <div class="col-12 mb-2 col-md-6 py-2">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est iusto placeat doloremque consectetur ipsa, molestias dicta aliquam maiores assumenda et ullam ratione id fugiat similique doloribus, aperiam sequi voluptas neque! Maiores iusto aut nemo expedita suscipit! Dolor esse aspernatur quos, amet libero animi excepturi perferendis distinctio facere ab quidem minima necessitatibus voluptatem sint explicabo quis, placeat, exercitationem quibusdam ipsum quia deleniti illum doloremque? Tempore facere quae nemo ea unde. Quo ullam, eveniet corporis cupiditate veniam est culpa exercitationem quidem illo debitis, nobis iure fugiat similique quod aliquid vel adipisci a nesciunt earum eaque! Unde libero amet sint consectetur harum voluptates.</p>
                    
                    <a href="info.php" class="btn btn-primary p-2">Go to Info Page</a>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="col-8 bg-grey border-2px loginBlock">
                        <h4>User Login</h4>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control my-2" id="username" name="username" placeholder="Username">
                                <input type="password" class="form-control my-2" id="password" name="password"  placeholder="Password">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary my-2 px-4">Login</button>
                                </div>
                                
                            </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="py-3 col-12 d-flex flex-row flex-wrap">
                    <div class="col-12 mb-2 bg-black text-white">
                        <h2>Dalhousie's definition for Plagiarism</h2>
                    </div>
                    <div class="col-12 px-1 d-md-flex justify-content-center">
                        <div class="col-12 col-md-7 mx-1 px-2 bg-grey">
                            <?php
                                $integrity = file_get_contents("files/integrity.txt");
                                $integrity = nl2br($integrity);
                                echo "<p>$integrity</p>";
                            ?>
                        </div>
                        <div class="col-12 col-md-5 mx-1 px-2 bg-grey d-flex align-items-center justify-content-center">
                            <div class="row">
                                <img src="img/integrity.png" height="auto" width="auto" class="img-fluid" alt="Academic Pledge" class="img-fluid">
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
                <div class="py-3 col-12 d-flex flex-row flex-wrap">
                    <div class="col-12 mb-2 bg-black text-white">
                        <h2>Academic Integrity Pledge</h2>
                    </div>
                    <div class="col-12 px-1 d-md-flex justify-content-center">
                        <div class="col-12 col-md-7 px-2 mx-1 bg-grey">
                            <?php
                                $pledge = file_get_contents("files/pledge.txt");
                                $pledge = nl2br($pledge);
                                echo "<p>$pledge</p>";
                            ?>
                        </div>
                        <div class="col-12 col-md-5 px-2 mx-1 bg-grey d-flex align-items-center justify-content-center">
                            <div class="row">
                                <img src="img/pledge.png" height="auto" width="auto" class="img-fluid" alt="Academic Integrity" class="img-fluid">
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
    <script src="js/script.js"></script>
</body>

</html>