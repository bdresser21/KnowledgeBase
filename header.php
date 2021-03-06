<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel = "stylesheet" href = "<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 

    <title>Knowledge Base</title>

    <?php wp_head();?>
</head>
<body class = "bg-light">
    <nav class = "p-1 navbar navbar-dark navbar-expand-lg navbar-default" role = "navigation">
        <div class = "container">
            <a class = "navbar-brand" href = "#">Brand</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class = "menu navbar-nav nav text-center p-4">
                    <li class = "nav-item"><a class = "nav-link" href = "#">Help Desk<span class="sr-only">(current)</span></a></li>
                    <li class = "nav-item"><a class = "nav-link" href = "#">Products</a></li>
                    <li class = "nav-item"><a class = "nav-link" href = "#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>