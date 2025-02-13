<!doctype html>
<html lang="en">

<head>
  <title>fitylife</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/routine.css">
</head>

<body>

  <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./bmi.php">BMI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./routine.php">Routine</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./review.php">Reviews</a>
        </li>
    </ul>


  <div class="container">
    <div class="jumbotron">
      <h3 align="center">Workout Routines</h3>
      <p align="center">Below are some workout routines to get you started on your road to healthy living.</p>
      <div id="myProgress">
        <div id="myBar"></div>
      </div>
      
      <br>
      <button onclick="move()">Start the time</button> 
    </div>
    <h2 align="center">Underweight Routines</h2>
    <div class="row">
      <div class="col-md-4">
        <h3>Benchpress</h3>
        <div>
          <p id="tbt1">The target muscle of the standard bench press is the chest. As a result, one is bound to gain
            body mass</p>
          <br><br><br><br>
        </div>

        <div>
          <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo">Benchpress</button>
          <div id="demo" class="collapse">
            <img src="https://github.com/fattym/fitylife/blob/master/img/benchpress.gif?raw=true" width="70%" class="img1">
          </div>
        </div>

      </div>
      <div class="col-md-4">
        <h3>Lunges</h3>
        <div>

          <p id="text2">Lunges increase muscle mass to build up strength and tone your body, especially your core, butt,
            and legs.
            Improving your appearance isn't the main benefit of shaping up your body, as you'll also improve your
            posture and range of motion</p>
          <br><br>
        </div>

        <div>
          <button type="button" class="btn btn-" data-toggle="collapse" data-target="#demo">Lunges</button>
          <div id="demo" class="collapse">
            <img src="https://raw.githubusercontent.com/fattym/fitylife/master/img/lunges.gif" width="70%" class="img1">
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <h3>Pushups</h3>
        <div>
          <p id="text3"> Traditional pushups are beneficial for building upper body strength. They work the triceps,
            pectoral muscles, and shoulders. When done with proper form,
            they can also strengthen the lower back and core by engaging (pulling in) the abdominal muscles. Pushups are
            a fast and effective exercise for building strength.</p>
        </div>

        <div>
          <button type="button" class="btn btn-" data-toggle="collapse" data-target="#demo">Pushups</button>
          <div id="demo" class="collapse">
            <img src="https://raw.githubusercontent.com/fattym/fitylife/master/img/pullups.gif" width="70%" class="img1">
          </div>
        </div>
      </div>


      <h3>videos help</h3>
      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">

          <!--Modal: Name-->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

              <!--Content-->
              <div class="modal-content">

                <!--Body-->
                <div class="modal-body mb-0 p-0">

                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RIJ2Jclv9Dg"
                      allowfullscreen></iframe>
                  </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">


                  <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

                  <script>
                    function myFunction(x) {
                      x.classList.toggle("fa-thumbs-down");
                    }
                  </script>
                  <span class="mr-4">Spread the word!</span>
                  <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                  <!--Twitter-->
                  <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                  <!--Google +-->
                  <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                  <!--Linkedin-->
                  <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal">Close</button>

                </div>

              </div>
              <!--/.Content-->

            </div>
          </div>
          <!--Modal: Name-->

          <a><img class="img-fluid z-depth-1" src="https://bit.ly/32QzNKc" alt="video" data-toggle="modal"
              data-target="#modal1">
            <div class="centered">Food to eat</div>
          </a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!--Modal: Name-->
          <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

              <!--Content-->
              <div class="modal-content">

                <!--Body-->
                <div class="modal-body mb-0 p-0">

                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/hnf9VTBc_Dk">
                    </iframe>
                  </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <span class="mr-4">Spread the word!</span>
                  <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                  <!--Twitter-->
                  <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                  <!--Google +-->
                  <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                  <!--Linkedin-->
                  <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal">Close</button>

                </div>

              </div>
              <!--/.Content-->

            </div>
          </div>
          <!--Modal: Name-->

          <a><img class="img-fluid z-depth-1" src="https://bit.ly/2x9P5Ot" alt="video" data-toggle="modal"
              data-target="#modal6">
            <div class="centered">Home work out</div>
          </a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!--Modal: Name-->
          <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

              <!--Content-->
              <div class="modal-content">

                <!--Body-->
                <div class="modal-body mb-0 p-0">

                  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dalXimAQOxs"
                      allowfullscreen></iframe>
                  </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <span class="mr-4">Spread the word!</span>
                  <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                  <!--Twitter-->
                  <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                  <!--Google +-->
                  <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                  <!--Linkedin-->
                  <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                  <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                    data-dismiss="modal">Close</button>

                </div>

              </div>
              <!--/.Content-->

            </div>
          </div>
          <!--Modal: Name-->

          <a><img class="img-fluid z-depth-1" src="https://bit.ly/2PPOg3O" alt="video" data-toggle="modal"
              data-target="#modal4">
            <div class="centered">Gym workout</div>
          </a>

        </div>
        <!-- Grid column -->


      </div>




    </div>







    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">

        <!--Modal: Name-->
        <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">

            <!--Content-->
            <div class="modal-content">

              <!--Body-->
              <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Aw71zanwMnY"
                    allowfullscreen></iframe>
                </div>

              </div>

              <!--Footer-->
              <div class="modal-footer justify-content-center">
                <span class="mr-4">Spread the word!</span>
                <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                <!--Twitter-->
                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                <!--Google +-->
                <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                <!--Linkedin-->
                <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                  data-dismiss="modal">Close</button>

              </div>

            </div>
            <!--/.Content-->

          </div>
        </div>
        <!--Modal: Name-->

        <a><img class="img-fluid z-depth-1" src="https://bit.ly/2TJcFJL" alt="video" data-toggle="modal"
            data-target="#modal11">
          <div class="centered">Meditation</div>
        </a>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Modal: Name-->
        <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">

            <!--Content-->
            <div class="modal-content">

              <!--Body-->
              <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                  <iframe width="420" height="345" src="https://www.youtube.com/embed/A4dv2P7lhaM">
                  </iframe>
                </div>

              </div>

              <!--Footer-->
              <div class="modal-footer justify-content-center">
                <span class="mr-4">Spread the word!</span>
                <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                <!--Twitter-->
                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                <!--Google +-->
                <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                <!--Linkedin-->
                <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                  data-dismiss="modal">Close</button>

              </div>

            </div>
            <!--/.Content-->

          </div>
        </div>
        <!--Modal: Name-->

        <a><img class="img-fluid z-depth-1" src="https://bit.ly/2VXZdED" alt="video" data-toggle="modal"
            data-target="#modal10">
          <div class="centered">Sleeping habbits</div>
        </a>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!--Modal: Name-->
        <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">

            <!--Content-->
            <div class="modal-content">

              <!--Body-->
              <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                  <iframe width="420" height="345" src="https://www.youtube.com/embed/PvEnWsPrL4w">
                  </iframe>
                </div>

              </div>

              <!--Footer-->
              <div class="modal-footer justify-content-center">
                <span class="mr-4">Spread the word!</span>
                <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                <!--Twitter-->
                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                <!--Google +-->
                <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                <!--Linkedin-->
                <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                  data-dismiss="modal">Close</button>

              </div>

            </div>
            <!--/.Content-->

          </div>
        </div>
        <!--Modal: Name-->

        <a><img class="img-fluid z-depth-1" src="https://bit.ly/2vFTdFC" alt="video" data-toggle="modal"
            data-target="#modal7">
          <div class="centered">Aerobics workout for beginner</div>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
      <script src="../js/routine.js"></script>
</body>

</html>