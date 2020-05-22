    <?php 
    include 'includes/header.php';
    ?>
    <!-- Hero Section-->
    <section style="background: url(img/hero.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1>Fabio Rocha</h1>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section -->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="h3">Some great intro here</h2>
            <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Firebase -->
    <section class="lfirebase no-padding-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="h3">Firebase - CRUD no form validation</h2>
            <!-- ↓↓↓ add form ↓↓↓ -->
            <div class="add-user-wrapper">
              <form id="add-user-form">
                <div class="form-controller">
                  <label>First Name:</label>
                  <input type="text" name="firstName" placeholder="First Name" class="form-control">
                </div>
                <div class="form-controller">
                  <label>Last Name:</label>
                  <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                </div>
                <div class="form-controller">
                  <label>City:</label>
                  <input type="text" name="city" placeholder="City" class="form-control">
                </div>               
                <button class="btn">Add User</button>
              </form>
            </div>
            <!-- ↑↑↑ add form ↑↑↑ -->
            <!-- ↓↓↓ Modal update form ↓↓↓ -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update</h4>
                  </div>
                  <div class="modal-body">
                    <div class="update-user-wrapper">
                      <form id="update-user-form">
                        <div class="form-controller">
                          <label>Identication:</label>
                          <input id="identification" type="text" name="identification" placeholder="Identification" class="form-control">
                        </div>
                        <div class="form-controller">
                          <label>Firt Name:</label>
                          <input id="fName" type="text" name="firstName" placeholder="First Name" class="form-control">
                        </div>
                        <div class="form-controller">
                          <label>Last Name:</label>
                          <input id="lName" type="text" name="lastName" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="form-controller">
                          <label>City:</label>
                          <input id="city" type="text" name="city" placeholder="City" class="form-control">
                        </div>               
                        <button class="btn" data-dismiss="modal" id="confirm-update">Confirm update</button>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- ↓↓↓ update form ↓↓↓ -->
            <!--
            <div class="update-user-wrapper">
              <form id="update-user-form">
                <div class="form-controller">
                  <label>Identication:</label>
                  <input id="identification" type="text" name="identification" placeholder="Identification" class="form-control">
                </div>
                <div class="form-controller">
                  <label>Firt Name:</label>
                  <input id="fName" type="text" name="firstName" placeholder="First Name" class="form-control">
                </div>
                <div class="form-controller">
                  <label>Last Name:</label>
                  <input id="lName" type="text" name="lastName" placeholder="Last Name" class="form-control">
                </div>
                <div class="form-controller">
                  <label>City:</label>
                  <input id="city" type="text" name="city" placeholder="City" class="form-control">
                </div>               
                <button class="btn" id="confirm-update">Confirm update</button>
              </form>
            </div>
            -->
            <!-- ↑↑↑ update form ↑↑↑ -->
            <div id="render-users" class="media-object-users"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Posts -->
    <section class="latest-posts no-padding-top"> 
      <div class="container">
        <header> 
          <h2>Latest from the blog</h2>
          <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <!-- ↓↓↓ posts section ↓↓↓ -->
        <div id="posts-container"  class="row"></div>
        <!-- ↑↑↑ posts section ↑↑↑ -->
      </div>
    </section>
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-1.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-1.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-2.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-2.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-3.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-3.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gallery-4.jpg" data-fancybox="gallery" class="image"><img src="img/gallery-4.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
        </div>
      </div>
    </section>
    <!-- Page Footer-->
    <?php 
    include 'includes/footer.php';
    ?>