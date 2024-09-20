<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <div>
        <div class="col-md-12 text-center">
            <h1>Welcome to My Assignment 1 Homepage</h1>
        </div>
    </div>

    <div class="row mt-5 bg-secondary">

        <div class="col-9 bg-light mx-auto">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet nulla velit. Nunc tristique
                    dui a sem mattis, sed consectetur dui iaculis. Sed pretium nulla justo, sed lacinia arcu auctor
                    rutrum. Nunc in velit id quam imperdiet laoreet at at leo. Praesent a faucibus sapien, at posuere
                    libero. Cras lobortis, dui sed rutrum consequat, magna turpis interdum neque, sed blandit ipsum orci
                    a orci. Ut imperdiet, nunc vel ultrices dictum, dolor diam feugiat ligula, sed dapibus ex sapien ac
                    ipsum. Aliquam turpis tortor, posuere ac urna in, euismod feugiat ligula. Aenean mattis, est sed
                    tempus pulvinar, ipsum libero finibus turpis, quis sollicitudin felis ex vel nisi. In hac habitasse
                    platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Nullam condimentum turpis sem, nec porta leo scelerisque eu.
                    Aenean commodo ut arcu quis pellentesque. Nulla tempor magna id ligula consectetur lobortis. Morbi
                    gravida eleifend nisi, nec porta orci.</p>
                <a href="info.php" class="btn btn-primary m-2">Go to Info Page</a>
            </div>
            <div class="d-flex flex-row">
                <div class="col-md-6">
                    <h2>Dalhousie's definition for Plagiarism</h2>
                    <?php
                    $integrity = file_get_contents("files/integrity.txt");
                    echo "<p>$integrity</p>";
                    ?>
                </div>
                <div class="col-md-6">
                    <img src="img/integrity.png" alt="Academic Integrity" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
    <script src="js/script.js"></script>
</body>

</html>