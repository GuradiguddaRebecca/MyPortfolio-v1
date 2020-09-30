<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>

                <div class="nav justify-content-end collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item" href="/project"><b>w</b>ork</a>
                        <a class="nav-item" href="#about-section"><b>a</b>bout</a>
                        <a class="nav-item" href="#foot"><b>c</b>ontact</a>
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
                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card mg-b">
                        <div class="img-wrap">
                            <img src="./images/patatap1.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Patatap</h2>
                            <p><span>HTML/ CSS/ JS</span> <span> paper.js</span> <span>howler.js</span></p>
                            <p class="card-text">This project is Patatap. You open up the app, press a key and a
                                circle shows up randomly on screen shrinking in size, A sound also plays and every
                                key has its own unique sound. I had a lot of fun playing with it in my browser </p>
                            <a class="p-link" href="projects/patatap2" target="_blank">View Project &#8594;</a>
                            {{-- <button style="margin-top:0px;"class="btn btn-small">View Project</button> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card mg-b">
                        <div class="img-wrap">
                            <img src="./images/1.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">ColorToggle</h2>
                            <p> <span>HTML/ CSS/ JS</span></p>
                            <p class="card-text">This is a very easy to play Color Game made purely with vanilla JS.
                                The way you play it is you are given an rgb value, and depending on the mode you
                                choose you will be displayed a number of squares. You have to correctly guess which
                                square it is by the rgb value.</p>
                            <a class="p-link" href="projects/colortoggle" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card mg-b">
                        <div class="img-wrap">
                            <img src="./images/Ecommerce.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">E-commerce website</h2>
                            <p> <span>HTML/ CSS/ JS</span></p>
                            <p class="card-text"> This is an eCommerce website using HTML and CSS.
                                In this e-commerce website design we will create Home page of
                                eCommerce website with banner section, some featured categories images,
                                then some featured products with product price, image and rating. </p>
                            <a class="p-link" href="projects/ecommerce" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card mg-b">
                        <div class="img-wrap">
                            <img src="./images/4.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Todolist</h2>
                            <p> <span>HTML/ CSS/ JS</span></p>
                            <p class="card-text">This one is a super simple to-do list where you can cross out what
                                you have done by clicking on the task or delete it by hovering and hitting the
                                garbage can icon</p>
                            <a class="p-link" href="projects/todolist" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="./images/recipe1.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Recipe App</h2>
                            <p><span>HTML/ CSS/ Vanilla javascript<span></p>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even slightly believable</p>
                            <a class="p-link" href="projects/recipe" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="./images/quiz11.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Quiz App</h2>
                            <p><span>HTML/ CSS/ Vanilla javascript<span></p>
                            <p class="card-text">This is the simple Quiz Application build on HTML, CSS, Javascript.
                                This application will be able to load questions and display the score at the end</p>
                            <a class="p-link" href="projects/quiz" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="./images/newyear.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Count Down Timer</h2>
                            <p><span>HTML/ CSS/ Vanilla javascript<span></p>
                            <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of text. All the Lorem
                                Ipsum generators on the Internet tend to repeat</p>
                            <a class="p-link" href="projects/countdown" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="./images/dotexpress.png" class="card-img-top" alt="Project Image">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">Dot Express</h2>
                            <p><span>Webflow<span></p>
                            <p class="card-text">This one is a super simple to-do list where you can cross out what
                                you have done by clicking on the task or delete it by hovering and hitting the
                                garbage can icon</p>
                            <a class="p-link" href="" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 card-cont">
                    <div class="card">
                        <div class="img-wrap">
                            <img src="./images/organo.png" class="card-img-top" alt="Project Image">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Organo</h2>
                            <p><span>Webflow<span></p>
                            <p class="card-text">This one is a super simple to-do list where you can cross out what
                                you have done by clicking on the task or delete it by hovering and hitting the
                                garbage can icon</p>
                            <a class="p-link" href="" target="_blank">View Project &#8594;</a>
                        </div>
                    </div>
                </div>

            </div>
            <button class="btn"><a href="/project">VIEW MORE PROJECTS</a></button>
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
                <div class="left col-sm-12 col-md-12 col-lg-6">
                    <p class="about-para">A full-stack web developer and user interface designer with a background in
                        Mathematics, Statistics and Computer Science. Currently employed in Hyderabad, looking for my
                        next professional opportunity.</p>

                    <h3 class="capab-heading">Proficient in:</h3>
                    <hr>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Front-end web development: HTML, CSS, and Javascript Fundamentals,
                            Vue.js, jQuery, Bootstrap (UI)</li>
                        <li class="list-group-item">Back-end web development: PHP - Laravel framework, MySQL/MongoDB
                            Databases</li>
                        <li class="list-group-item">Data Mining and Analysis through R and Python</li>
                        <li class="list-group-item">Webflow site builder and CMS operations</li>
                        <li class="list-group-item">Project management through Agile methodology</li>
                        <li class="list-group-item">Package managers, builders - Node Package Manager, Composer, Webpack
                        </li>
                        <li class="list-group-item">Version Control through Git</li>
                        <li class="list-group-item">Deployment fundamentals through Digital Ocean and Heroku</li>
                        <li class="list-group-item">UNIX fundamentals - Ubuntu</li>
                    </ul>

                    <button class="btn"><a href=""></a>Download Resume</button>
                </div>
                <div class="right col-md-12 col-lg-6">

                    <div class="tech-img">
                        <img src="./images/new_tech.png" class="img-fluid" alt="Responsive image">
                    </div>

                </div>
            </div>
        </div>

    </section>



    <!-- slide -->
    <section id="slide">
        <div class="slide-container">
        <div class="col-sm-12" style="margin:0 auto; padding:0;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                            alt="First slide">
                        <div class="slide carousel-caption d-none d-md-block">
                            <h5>Organo</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s</p>
                            <button class="btn">View project<a href=""></a></button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    </section>

    </section>
    <!-- footer -->
    <div id="foot">
        <div class="container">
            <div class="contact-line mb-5">
                <h3>Leave a message!!</h3>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
            </div>
            <form method="post" action="/message">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="label" for="inputEmail4">Name:</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name">
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
                    <label class="label" for="inputAddress2">Message:</label>
                    <textarea style="height:150px;" class="form-control" name="message" id="inputAddress2"></textarea>
                </div>

                <button type="submit" class="btn btn-small">SUBMIT</button>
            </form>


            {{-- social media --}}
            <div class="social-media-wrapper mt-5">
                <div class="social-group mr-4">
                    <a href="https://mail.google.com/mail/u/0/#compose"> <img src="./images/mail.png" alt=""></a>
                </div>
                <div class="social-group mr-4">
                    <a href="https://www.linkedin.com/in/rebecca-guradigudda-889390188/"><img
                            src="./images/linkedin.png" alt=""></a>
                </div>
                <div class="social-group mr-4 mt-1">
                    <a href="https://github.com/GuradiguddaRebecca"><img src="./images/git.png" alt=""></a>
                </div>
                <div class="social-group mr-4 mt-1">
                    <a href=""><img src="./images/portfolio.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>



    {{-- </div> --}}


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
