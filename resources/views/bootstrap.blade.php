<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <!-- Nav bar -->
    <header>
      <div class="container">
        <nav class="navbar sticky-top navbar-dark navbar-expand-lg">
          <span>
            <h1 class="navbar-brand" href="#">Rebecca G</h1>
            <p class="designation">Software Developer & Designer</p>    
          </span>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
          </button>
          <div class="nav justify-content-end collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
             
                <a class="nav-item" href="#work-section"><b>w</b>ork</a>
              
              
              
              <a class="nav-item" href="#about-section"><b>a</b>bout</a>
             
              <a class="nav-item" href="#footer"><b>c</b>ontact</a>
             
            </div>
          </div>
        </nav>
      </div>
  </header>
            


{{-- Work section --}}
    <section id="work-section">
      <div class="container">

            <div class="section-header">
              <h2 class="section-title">work</h2>
              <hr>
            </div>
              
        
          <div class="row ">
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                  <img src="./images/patatap1.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h2 class="card-title">Patatap</h5>
                    <p><span>HTML/ CSS/ JS</span> <span> paper.js</span> <span>howler.js</span></p>
                    <p class="card-text">This project is Patatap. You open up the app, press a key and a circle shows up randomly on screen shrinking in size, A sound also plays and every key has its own unique sound. I had a lot of fun playing with it in my browser </p>
                    {{-- <a class="project-link" href="">View Project</a> --}}
                    <button style="margin-top:0px;"class="btn btn-small">View Project</button>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                  <img src="./images/2.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h2 class="card-title">YelpCamp</h5>
                    <p><span>Node.js</span> <span>Express.js</span> <span>jQuery</span> <span>MongoDB</span> <span>HTML/CSS/JS</span></p>
                    <p class="card-text">Yelpcamp is a campground rating app, where users can create their own campgrounds, view and comment on others' campgrounds.</p>
                    <a class="project-link" href="">View Project</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                  <img src="./images/1.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h2 class="card-title">ColorToggle</h5>
                    <p> <span>HTML/ CSS/ JS</span></p>
                    <p class="card-text">This is a very easy to play Color Game made purely with vanilla JS. The way you play it is you are given an rgb value, and depending on the mode you choose you will be displayed a number of squares. You have to correctly guess which square it is by the rgb value.</p>
                    <a class="project-link" href="">View Project</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                  <img src="./images/3.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h2 class="card-title">Laravel CRUD</h5>
                    <p><span>HTML/ CSS/ JS</span> <span>php</span> <span>Laravel</span></p>
                    <p class="card-text">CRUD stands for Create, Read, Update and Delete which are operations needed in most data-driven apps that access and work with data from a database.</p>
                    <a class="project-link" href="">View Project</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                  <img src="./images/4.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h2 class="card-title">Todolist</h5>
                    <p> <span>HTML/ CSS/ JS</span></p>
                    <p class="card-text">This one is a super simple to-do list where you can cross out what you have done by clicking on the task or delete it by hovering and hitting the garbage can icon</p>
                    <a class="project-link" href="">View Project</a>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                  <img src="./images/dotexpress.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h2 class="card-title">Dot Express</h5>
                    <p><span>Webflow<span></p>
                    <p class="card-text">This one is a super simple to-do list where you can cross out what you have done by clicking on the task or delete it by hovering and hitting the garbage can icon</p>
                    <a class="project-link" href="">View Project</a>
                  </div>
                </div>
              </div>  
          </div>
      </div>
  </section>


{{-- About section --}}
<section id="about-section">
  <div class="container">
    <div class="section-header">
    <h2 style="color:black;" class="section-title">About</h2>
    <hr>
  </div>
    <div class="row">
      <div class="left col-md-12 col-lg-6">
        <p>A full-stack web developer and user interface designer with a background in Mathematics, Statistics and Computer Science. Currently employed in Hyderabad, looking for my next professional opportunity.</p>
        
              <h3 class="capab-heading">Proficient in:</h3>
              <hr>
              
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">Front-end web development: HTML, CSS, and Javascript Fundamentals, Vue.js, jQuery, Bootstrap (UI)</li>
                  <li class="list-group-item">Back-end web development: PHP - Laravel framework, MySQL/MongoDB Databases</li>
                  <li class="list-group-item">Data Mining and Analysis through R and Python</li>
                  <li class="list-group-item">Webflow site builder and CMS operations</li>
                  <li class="list-group-item">Project management through Agile methodology</li>
                  <li class="list-group-item">Package managers, builders - Node Package Manager, Composer, Webpack</li>
                  <li class="list-group-item">Version Control through Git</li>
                  <li class="list-group-item">Deployment fundamentals through Digital Ocean and Heroku</li>
                  <li class="list-group-item">UNIX fundamentals - Ubuntu</li>
              </ul>

              <button class="btn">Download Resume</button>
      </div>
      <div class="right col-md-12 col-lg-6">
        <img src="./images/techmar.png" class="img-fluid" alt="Responsive image">
      </div>
    </div>
  </div>     
  
</section> 

<!-- slide -->
    <section id="slider">
      <div class="container">
          <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
              alt="First slide">
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Light mask</h3>
            <p>First text</p>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
              alt="Second slide">
            <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Strong mask</h3>
            <p>Secondary text</p>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
              alt="Third slide">
            <div class="mask rgba-black-slight"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Slight mask</h3>
            <p>Third text</p>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
      </div>
      
  </section>

    <!-- footer -->
  <div id="foot">
      <div class="container">
          <div class="contact-line mb-5">
            <h3>Leave a message!!</h3>
          </div>
          <form method="post">
            @csrf
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="label" for="inputEmail4">Name:</label>
                    <input type="text" class="form-control" id="inputEmail4" name="name" >
                  </div>
                  <div class="form-group col-md-6">
                    <label class="label" for="inputPassword4">Email:</label>
                    <input type="email" class="form-control" id="inputPassword4" name="email">
                  </div>
              </div>
                <div class="form-group ">
                  <label class="label" for="inputAddress">Subject:</label>
                  <input type="text" class="form-control" id="inputAddress" name="subject">
                </div>
                <div class="form-group ">
                  <label class="label" for="inputAddress2" >Message:</label>
                  <textarea style="height:150px;" class="form-control" name="message" id="inputAddress2" ></textarea>
                </div>
                
                <button type="submit" class="btn btn-small">SUBMIT</button>
          </form>
          
          
          {{-- social media --}}
          <div class="social-media-wrapper mt-5">
            <div class="social-group mr-4">
              <img src="./images/mail.png" alt="">
            </div>
            <div class="social-group mr-4">
              <img src="./images/linkedin.png" alt="">
            </div>
            <div class="social-group mr-4 mt-1">
              <img src="./images/git.png" alt="">
            </div>
            <div class="social-group mr-4 mt-1">
              <img src="./images/portfolio.png" alt="">
            </div>
          </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>