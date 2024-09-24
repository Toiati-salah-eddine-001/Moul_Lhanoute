<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Moul Lhanout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./Style/header.css">
    <link rel="stylesheet" href="./Style/font.css">
    <link rel="stylesheet" href="./Style/dashbordmain.css">
    <link rel="stylesheet" href="./Style/ContentDashbord.css">
</head>
<body>
    <div class="cotainer">
        <?php echo $header ?>
        <div class="pageGrid">
            <div class="col1">
                <?php echo $Sidebare ?>
            </div>
            <div class="col2">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</body>
<script src="./Js/DashBoard.js"></script>
</html>