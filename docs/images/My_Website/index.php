<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/b04f0c3d24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/Styles.css">
</head>
   
	<title>KEVOMANIX</title>
</head>
<body>
  <!-- Preloader -->
<div id="preloader"></div>
  <nav class="navbar navbar-expand-lg  navbar-right">
  <a class="navbar-brand" href="#">KEVOMANIX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav ms-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projects.php">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="solution.php">Error Solutions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner7.avif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Web Designer and developer</h5>
        <p>Are you in need of a website?Do you want to partner with us?</p>
        <div class="slider-btn">
        <button class="btn btn-1" data-bs-toggle="modal" data-bs-target="#myModal">Order a website</button>
        <button class="btn btn-2" data-bs-toggle="modal" data-bs-target="#myModal1">Partner with us</button>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner5.avif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Web Designer and developer</h5>
        <p>Are you in need of a website?Do you want to partner with us?</p>
        <div class="slider-btn">
        <button class="btn btn-1" data-bs-toggle="modal" data-bs-target="#myModal">Order a website</button>
        <button class="btn btn-2" data-bs-toggle="modal" data-bs-target="#myModal1">Partner with us</button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner6.avif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Web Designer and developer</h5>
        <p>Are you in need of a website?Do you want to partner with us?</p>
        <div class="slider-btn">
        <button class="btn btn-1" data-bs-toggle="modal" data-bs-target="#myModal">Order a website</button>
        <button class="btn btn-2" data-bs-toggle="modal" data-bs-target="#myModal1">Partner with us</button>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--start of form-->
       <div class="modal" id="myModal">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">ORDER A WEBSITE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="row" >
                        <div class="col-4">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="lastname">Last name</label>
                            <input type="text" id="lastname" class="form-control">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="email">Email </label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" class="form-control">
                        </div>
                         <div class="col-12">
                            <label class="form-label" for="address">Phone number </label>
                            <input type="text" id="address" class="form-control">
                        </div>
                        <div class="col-5">
                            <label class="form-label" for="country">Country </label>
                            <select class="form-select" id="country">
                                <option>Choose</option>
                                <option>Kenya</option>
                                <option>United states</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="state">County/State</label>
                            <select class="form-select" class="form-control" id="state">
                                <option>Choose</option>
                                <option>Nairobi</option>
                                <option>Nakuru</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="zip">Zip Code</label>
                            <input type="text" id="zip" class="form-control">
                        </div>
                         <div class="col-12">
                            <label class="form-label" for="address">Specify the type of Website </label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Order now</button>
                    <button type="submit" class="btn btn-danger"  data-bs-dismiss="modal">Cancel</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<!--end of Order form-->
<!--partner with us-->
 <div class="modal" id="myModal1">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">ORDER A WEBSITE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="row" >
                        <div class="col-4">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="lastname">Last name</label>
                            <input type="text" id="lastname" class="form-control">
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="email">Email </label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" class="form-control">
                        </div>
                         <div class="col-12">
                            <label class="form-label" for="address">Phone number </label>
                            <input type="text" id="address" class="form-control">
                        </div>
                        <div class="col-5">
                            <label class="form-label" for="country">Country </label>
                            <select class="form-select" id="country">
                                <option>Choose</option>
                                <option>Kenya</option>
                                <option>United states</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="state">County/State</label>
                            <select class="form-select" id="state">
                                <option>Choose</option>
                                <option>Nairobi</option>
                                <option>Nakuru</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="zip">Zip Code</label>
                            <input type="text" id="zip" class="form-control">
                        </div>
                         <div class="col-12">
                            <label class="form-label" for="address">Describe yourself briefly</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Join us</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--content-->
      <div class="profile-area">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <div class="card">
                          <div class="img1"><img src="images/banner7.avif"></div>
                          <div class="img2"><img src="images/banner6.avif"></div>
                          <div class="main-text">
                              <h2>Project manager</h2>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div>
                          <div class="socials">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-whatsapp"></i>
                            <i class="fa fa-instagram"></i>
                              
                          </div>
                      </div>
                  </div>
                   <div class="col-md-4">
                      <div class="card">
                          <div class="img1"><img src="images/banner1.jpg"></div>
                          <div class="img2"><img src="images/banner3.jpg"></div>
                          <div class="main-text">
                              <h2>Website Designer</h2>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div>
                          <div class="socials">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-whatsapp"></i>
                            <i class="fa fa-instagram"></i>
                              
                          </div>
                      </div>
                  </div>
                   <div class="col-md-4">
                      <div class="card">
                          <div class="img1"><img src="images/banner4.avif"></div>
                          <div class="img2"><img src="images/banner7.avif"></div>
                          <div class="main-text">
                              <h2>Programmer and developer</h2>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div>
                          <div class="socials">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-whatsapp"></i>
                            <i class="fa fa-instagram"></i>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <!--footer-->
<footer class="bg-dark text-white pt-5 pb-4 site-footer">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">KEVOMANIX_CODE</h5>
                <p>This is the best site to order a website for your organization.We design dynamic website by use of HTML,CSS,Javascript and PHP.Also you can join us and become a member of this great community.</p>
           <hr class="mb-4 btn-danger">
            <div class="row mx-auto mt-3">
                <ul class="socials">
                <li><i class="fa fa-instagram"></i></li>
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-whatsapp"></i></li>
                </ul>
            
            </div>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
            <p><a href="#" class="text-white" style="text-decoration: none;">Dynamic websites</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none;">Job opportunities</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none;">SourceFiles</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none;">Mentorship</a></p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
            <p><a href="#" class="text-white" style="text-decoration: none;">Home</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none;">Order a website</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none;">Join us</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none;">Help</a></p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
                <p><i class="fas fa-home mr-3"></i>Kenya, NY 2333,Nakuru</p>
                <p><i class="fas fa-envelope mr-3"></i>kelvinmwaniki62@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i>+254 719161593</p>
                <p><i class="fas fa-print mr-3"></i>+01 335 633 77</p>
            </div>
        </div>
 <div class="row align-items-center">
     <h6 class="modal-footer">&copyCopyright 2022||Designed by KEVO_MANIX</h6>
 </div>
        
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load",function(){
        loader.style.display = "none";
    })
</script>
</body>
</html>