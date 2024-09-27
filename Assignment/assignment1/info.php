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
    <div class='container-fluid px-0 mx-0 py-5 d-flex justify-content-center align-items-center border border-dark'>
        <div class="col-12 text-center">
            <h1>Welcome to My Assignment 1 Homepage</h1>
        </div>
    </div>
    <div class="col-12 bg-grey" >

        <div class="col-9 bg-white p-5 mx-auto">
            <div class="col-12 mb-2 py-2">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est iusto placeat doloremque consectetur ipsa, molestias dicta aliquam maiores assumenda et ullam ratione id fugiat similique doloribus, aperiam sequi voluptas neque! Maiores iusto aut nemo expedita suscipit! Dolor esse aspernatur quos, amet libero animi excepturi perferendis distinctio facere ab quidem minima necessitatibus voluptatem sint explicabo quis, placeat, exercitationem quibusdam ipsum quia deleniti illum doloremque? Tempore facere quae nemo ea unde. Quo ullam, eveniet corporis cupiditate veniam est culpa exercitationem quidem illo debitis, nobis iure fugiat similique quod aliquid vel adipisci a nesciunt earum eaque! Unde libero amet sint consectetur harum voluptates.</p>
            
            </div>
            <div class="col-12 mb-2 py-2">
                <h2 class="text-uppercase">Citations</h2>
                <?php
                    $citationText = file_get_contents('files/citations.txt');

                    $sections = [];
                    $lines = explode("\n", $citationText);

                    foreach ($lines as $line) {
                        $line = trim($line);
                        if (empty($line)) {
                            continue;
                        }
                        list($section, $content) = explode(':', $line, 2);

                        if (!isset($sections[$section])) {
                            $sections[$section] = '';
                        }
                        $content = preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1">$1</a>', $content);

                        $sections[$section] .= "<p>" . nl2br(trim($content)) . "</p>";
                    }

                    foreach ($sections as $sectionTitle => $sectionContent) {
                        echo "<h4> $sectionTitle</h4>";
                        echo $sectionContent;
                    }
                    ?>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>

</body>

</html>