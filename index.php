<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel = "stylesheet" href = "<?php echo get_bloginfo('template_directory'); ?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 

    <title>Knowledge Base</title>
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
    <header id = "search-docs" class = "jumbotron jumbotron-fluid">
        <div class="container text-center p-5">
            <h1>How can we help?</h1>
            
            <form class="form-inline justify-content-center pt-3">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form> 
            
        </div>
        <!--Background-->
        <!--Text-->
    </header>
    <section id = "content-area" class = "container pt-4 pb-4 ">
        <!--Header Text-->
        <h4 class = "pb-4">General Topics</h4>
        
        <section class = "category-list">
            <div class="row text-center">
                <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                  <div class="card p-4">
                    <div class="card-body">
                      <h5 class="card-title">FAQs</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                  <div class="card p-4">
                    <div class="card-body">
                      <h5 class="card-title">Account</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                      <div class="card-body">
                        <h5 class="card-title">Browse by Product</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                      <div class="card-body">
                        <h5 class="card-title">Software Issues</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                      <div class="card-body">
                        <h5 class="card-title">Hardware Issues</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                    <div class="card p-4">
                      <div class="card-body">
                        <h5 class="card-title">Popular Articles</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
              </div>
        </section>
        <!--Header Text-->
        
        <!--Grid for cards; check out https://getbootstrap.com/docs/4.4/components/card/ -->
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>