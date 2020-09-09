<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    {{-- Navigation Bar --}}
    {{-- <header>
        <div class="container">
        <div class="nav-wrapper">
            <div class="left-nav-links">
                <h1 class="bold">Rebecca G</h1>
                <p>Software Developer & Designer</p>
            </div>
            <div class="right-nav-links">
                <a class="nav-link" href="">Work</a>
                <a class="nav-link" href="">About</a>
                <a class="nav-link" href="">Contact</a>
            </div>
        </div>
        </div>
      </header> --}}

    <nav>
     
        <div class="logo">
          <h1 class="bold">Rebecca G</h1>
          <p>Software Developer & Designer</p>
        </div>
        <ul class="nav-links">
          <li><a href="">Work</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
        </ul>

        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
     
        
    </nav> 

    {{-- Work section --}}
    <section id="work-section">
        <div class="container">

            <div class="section-title">
                <h2 style="font-weight:bold;" class="uppercase">work</h2>
                <hr>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                  <div class="card">
                    <img style="width:339px; height:225px;" src="./images/3.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                      <h2 class="card-title">YelpCamp</h5>
                       
                     
                      <p class="text-upperacse">Node.js, Express.js, jQuery, MongoDB, HTML/CSS/JS</p>
                      <p class="card-text">Yelpcamp is a campground rating app, where users can create their own campgrounds, view and comment on others' campgrounds.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img style="width:339px; height:225px;" src="./images/2.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                      <h2 class="card-title">ColorToggle</h5>
                      <p class="text-uppercase"> HTML/CSS/JS</p>
                      <p class="card-text">This is a very easy to play Color Game made purely with vanilla JS. The way you play it is you are given an rgb value, and depending on the mode you choose you will be displayed a number of squares. You have to correctly guess which square it is by the rgb value.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img style="width:339px; height:225px;" src="./images/4.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                      <h2 class="card-title">Laravel CRUD</h5>
                      <p class="text-uppercase">HTML/CSS/JS PHP Laravel</p>
                      <p class="card-text">CRUD stands for Create, Read, Update and Delete which are operations needed in most data-driven apps that access and work with data from a database.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img style="width:339px; height:225px;" src="./images/1.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                      <h2 class="card-title">Todolist</h5>
                      <p class="text-uppercase"> HTML/CSS/JS</p>
                      <p class="card-text">TThis one is a super simple to-do list where you can cross out what you have done by clicking on the task or delete it by hovering and hitting the garbage can icon</p>
                    </div>
                  </div>
                </div>
                
                <div class="col mb-4">
                  <div class="card">
                    <img style="width:339px; height:225px;" src="./images/dotexpress.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                      <h2 class="card-title">Dot Express</h5>
                      <p class="text-uppercase">Webflow</p>
                      <p class="card-text">This one is a super simple to-do list where you can cross out what you have done by clicking on the task or delete it by hovering and hitting the garbage can icon</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card">
                    <img style="width:339px; height:225px;" src="./images/organo.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                      <h2 class="card-title">Bender, destroy the universe!</h5>
                      <p class="text-uppercase">Webflow</p>
                      <p class="card-text">This is a Color Game made purely with vanilla JS. There will be an rgb value,You have to correctly guess which square it is by the rgb value.</p>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </section>

    

    {{-- About section --}}
    <section id="About-section">
        <div class="container">
           <div class="columns">
               <div class="left-column">
                <div class="section-title">
                    <h2 style="font-weight:bold;" class="uppercase">About</h2>
                    <hr>
                </div>
                
                <div class="about-para">
                    <h3>A full-stack web developer and user interface designer with a background in Mathematics, Statistics and Computer Science. Currently employed in Hyderabad, looking for my next professional opportunity in my field</h3>
                </div>

                <div class="capabilities">
                    <div class="strong uppercase">
                        <h3 style="font-weight:bold;">proficient in:</h3>
                        <hr>
                    </div>

                    <div>
                        <p class="about-point">Front-end web development: HTML, CSS, and Javascript Fundamentals, Vue.js, jQuery, Bootstrap (UI) </p>
                        <p class="about-point">Back-end web development: PHP - Laravel framework, MySQL/MongoDB Databases</p>
                        <p class="about-point">Data Mining and Analysis through R and Python</p>
                        <p class="about-point">Webflow site builder and CMS operations</p>
                        <p class="about-point">Project management through Agile methodology</p>
                        <p class="about-point">Package managers, builders - Node Package Manager, Composer, Webpack</p>
                        <p class="about-point">Version Control through Git</p>
                        <p class="about-point">Deployment fundamentals through Digital Ocean and Heroku</p>
                        <p class="about-point">UNIX fundamentals - Ubuntu</p>   
                    </div>
                    
                </div>
                <button class="btn">DOWNLOAD RESUME</button>
               </div>

               <div class="right-column">
                <img src="./images/techs.png" class="img-fluid" alt="Responsive image">
               </div>
           </div>
            
            
            
          </div>
    </section>


    {{-- slider --}}
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


    
    {{-- footer--}}
    <div id="foot">
      <div class="container">
          <div class="contact-line mb-5">
            <h3>Leave a message</h3>
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
    
    

    <script src="/js/app.js"></script>
</body>
</html>