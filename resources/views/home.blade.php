<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <div class="container">
          <nav class="navbar sticky-top navbar-light navbar-expand-lg">
            <span>
              <a class="navbar-brand" href="#">Rebecca G</a>
              <p class="designation">Software Developer&Designer</p>    
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav justify-content-end collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="#work-section"><b>W</b>ork</a>
                <a class="nav-item nav-link" href="#about-section"><b>A</b>bout</a>
                <a class="nav-item nav-link" href="#footer"><b>C</b>ontact</a>
                <button type="button" class="btn btn-primary">DOWNLOAD RESUME</button>
              </div>
            </div>
          </nav>
        </div>
    </header>

      {{-- Work section --}}
    <section id="work-section">
        <div class="container">
          <p class="text-uppercase section-title">Work</p>
          <hr>
          <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card">
                  <img src="./images/3.png" class="card-img-top" alt="Project Image">
                  <div class="card-body">
                    <h5 class="card-title">Laravel CRUD</h5>
                    <p class="text-uppercase">HTML/CSS/JS, MySQL, Laravel </p>
                    <p class="card-text">CRUD stands for Create, Read, Update and Delete which are operations needed in most data-driven apps that access and work with data from a database.</p>
                  </div>
                </div>
            </div> 
            <div class="col mb-4">
              <div class="card">
                <img src="./images/2.png" class="card-img-top" alt="Project Image">
                <div class="card-body">
                  <h5 class="card-title">YelpCamp</h5>
                  <p class="text-uppercase">Node.js, Express.js, Passport.js, iQuery, MongoDB, HTML/CSS/JS</p>
                  <p class="card-text">Yelpcamp is a campground rating app, where users can create their own campgrounds, view and comment on others' campgrounds.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <img src="./images/1.png" class="card-img-top" alt="Project Image">
                <div class="card-body">
                  <h5 class="card-title">ColorToggle</h5>
                  <p class="text-uppercase"> HTML/CSS/JS</p>
                  <p class="card-text">This is a very easy to play Color Game made purely with vanilla JS. The way you play it is you are given an rgb value, and depending on the mode you choose you will be displayed a number of squares. You have to correctly guess which square it is by the rgb value.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <img src="./images/4.png" class="card-img-top" alt="Project Image">
                <div class="card-body">
                  <h5 class="card-title">Todolist</h5>
                  <p class="text-uppercase"> HTML/CSS/JS</p>
                  <p class="card-text">TThis one is a super simple to-do list where you can cross out what you have done by clicking on the task or delete it by hovering and hitting the garbage can icon</p>
                </div>
              </div>
            </div>
            
            <div class="col mb-4">
              <div class="card">
                <img src="./images/dotexpress.png" class="card-img-top" alt="Project Image">
                <div class="card-body">
                  <h5 class="card-title">Bender, destroy the universe!</h5>
                  <p class="text-uppercase">LARAVEL HTML JAVASCRIPT</p>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <img src="./images/organo.png" class="card-img-top" alt="Project Image">
                <div class="card-body">
                  <h5 class="card-title">Bender, destroy the universe!</h5>
                  <p class="text-uppercase">LARAVEL HTML JAVASCRIPT</p>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            
            
          </div>
         
        </div>
    </section>

    
    {{-- About section --}}
<section id="about-section">
    <div class="container">
      <p class="text-uppercase section-title">About</p>
      <hr>
      <div class="row">
        <div class="col-sm">
          <p class="text-left">A full-stack web developer and user interface designer with a background in Mathematics, Statistics and Computer Science. Currently employed in Hyderabad, looking for my next professional opportunity.</p>
          
                <p class="something text-uppercase">Proficient in:</p>
                
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
        </div>
        <div class="col-sm">
          <img src="./images/techs.png" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>     
    
  </section> 

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

  <footer id="footer">
    <div class="container">
      <div class="contact">
        <div class="social-media">
            
            <div class="social-group">
                <p>Name:</p>
                <img src="./images/mail.png" alt="">
            </div>
            <div class="social-group">
                <p>Email:</p>
                <img src="./images/linkedin.png" alt="">
            </div>
            <div class="social-group">
                <p>Subject:</p>
                <img src="./images/git.png" alt="">
            </div>
            <div class="social-group">
                <p>Message:</p>
                <img src="./images/portfolio.png" alt="">
            </div>
           
        </div>
      <p>Leave me a message!</p> 
      <div class="card-body">
        @if(Session::has('success'))
           <div class="alert alert-success">
             {{ Session::get('success') }}
            </div>
        @endif
        <form>
            <div class="form-group">
              <label for="formGroupExampleInput">Example label</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Another label</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Another label</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
            
        </form>
        </div>
      </div>  
      
    </div>  
  </footer>

  
    
    
    
    <script src="/js/app.js"></script>
    
</body>


</html>



