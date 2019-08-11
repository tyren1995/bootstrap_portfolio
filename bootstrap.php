<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <style>
        @media screen and (min-width: 1000px) {
           #icons-section {
               min-height: 600px; 
           } 
        }
      </style>
    <!-- Navigation -->
    <!-- End Navigation --> 
    <?php 
    function generateRow($classes, $content){
        $html = "<div class='row'>";
        $html .= "<div class='$classes'";
        $html .= "<p> $content </p>";
        $html .= "</div>";
        $html .= "</div>";
        echo $html;
    }
    $myContent = ['col-sm-6' => 'Hello there!',
                  'col-sm-6' => 'Hello World!'            
    ];

   
    ?>

    <div class="container-fluid">
        <?php 
         foreach($myContent as $class => $content){
            generateRow($class, $content);
        }
        ?><nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
        
        <div class="row" style="background-color: #EAAA00;" id="icons-section">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <!-- Icon -->
                        <img style="max-width: 100%;" src="HTML/design_icon.png" />
                    </div>
                    <div class="col-6">
                        <!-- Text -->
                        <p class="lead">
                            Design
                        </p>
                        <p>
                            The creative force and knowledge to turn your ideas into reality.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="row">
                    <div class="col-6">
                        <img style="max-width: 100%;" src="HTML/programming_icon.png"/>
                    </div>
                    <div class="col-6">
                        <p class="lead">
                            Full Stack Development
                        </p>
                        <p>
                            Beautifully Dynamic front ends, Efficient, secure back ends, speedy databases.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="row">
                    <div class="col-6">
                        <img style="max-width: 100%;" src="HTML/money.png"/>
                    </div>
                    <div class="col-6">
                        <p class='lead'>
                            Fair Prices
                        </p>
                        <p>
                            Different plans and rates to suit any project big or small.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>