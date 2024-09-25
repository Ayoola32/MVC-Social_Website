<?php $this->view('header');?>
<main class="p-4">
  <div class="container">
    <div class="main-body">    
      <div class="row gutters-sm">

        <!-- PICTURE PROFILE -->
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <span>
                  <img src="<?=get_image($row->user_image)?>" alt="Admin" class="profile-image rounded-circle" width="150">
                  <label for="image">
                      <i style="position: absolute; cursor: pointer;" class="h1 text-primary bi bi-image"></i>
                      <input id="image" onchange="display_image(this.files[0]);" type="file" class="d-none" name="image">
                  </label>

                  <script>
                      function display_image(file) {
                        let allowed = ['jpg', 'jpeg', 'png', 'webp'];
                        let ext = file.name.split(".").pop();

                        if (!allowed.includes(ext.toLowerCase())) {
                          alert("Only files of this type is allowed: " + allowed.join(", "))
                          return
                        }

                        document.querySelector(".profile-image").src = URL.createObjectURL(file);
                        change_image(files);
                      }
                  </script>
                </span>

                <div class="mt-3">
                  <h4><?=ucfirst(esc($row->username))?></h4>
                  <p class="text-secondary mb-1">PHP Developer</p>
                  <p class="text-muted font-size-sm">Salford Manchester, England</p>
                  <button class="btn btn-primary">Follow</button>
                  <button class="btn btn-outline-primary">Message</button>
                </div>
              </div>
            </div>
          </div>

          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                <span class="text-secondary">username</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                <span class="text-secondary">@username</span>
              </li>
            </ul>
          </div>

        </div>

        <div class="col-md-8">
          <!-- PROFILE -->
          <div class="card mb-3">
              <div class="card-body">

                  <!-- Profile progress bar -->
                  <div class="profile-image-prog progress mb-1 d-none" role="progressbar">
                    <div class="progress-bar" style="width: 0%">0%</div>
                  </div>

                  <div class="row">
                    <div class="col-sm-3">
                        <h4 class="mb-0">
                            PROFILE
                        </h4>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                      <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          Abubakar Sidiq
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          @example.com
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          (239) 111-1111
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          Salford Manchester, England
                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-12">
                          <a class="btn btn-info" href="#">Edit</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- TEXTAREA -->
          <div class="card mb-3">
              <div class="card-body">
                  <div class="row">
                      <div class="col-sm-3">
                          <h4 class="mb-0">
                              STATUS
                          </h4>
                      </div>

                  </div>
                  <hr>

                  <div class="bg-light p-2">
                    <form action="" method="post">
                      <textarea class="responsive-textarea" name="" id="" style="resize: none;" placeholder="Whats on your mind?....."></textarea>
                      
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-warning" href="">Post</a>
                        </div>
                      </div>
                    </form>
                  </div>
                    
                  <!-- Profile progress bar -->
                  <div class="profile-image-prog progress mb-1 d-none" role="progressbar">
                    <div class="progress-bar" style="width: 0%">0%</div>
                  </div>
              </div>
              
          </div>
        
          <!-- ViVIEW POSTS -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="row post p-1">
                <!-- Make the image and username section responsive using Bootstrap's column system -->
                <div class="col-12 col-md-3 bg-light py-2 text-center">
                  <img src="<?=get_image($row->user_image)?>" alt="Admin" class="profile-image rounded-circle img-fluid" width="120">
                  <h5><?=ucfirst(esc($row->username))?></h5>
                </div>

                <!-- Make the content responsive, adjusting width for mobile and larger screens -->
                <div class="col-12 col-md-9 py-2 text-start">
                  <div class="muted">
                    <?=date("Y-m-d")?>
                  </div>
                  <p>Some content goes here...</p>
                </div>
              </div>

              <hr>

              <div class="row post p-1">
                <!-- Repeated section for another post -->
                <div class="col-12 col-md-3 bg-light py-2 text-center">
                  <img src="<?=get_image($row->user_image)?>" alt="Admin" class="profile-image rounded-circle img-fluid" width="120">
                  <h5><?=ucfirst(esc($row->username))?></h5>
                </div>

                <div class="col-12 col-md-9 py-2 text-start">
                  <div class="muted">
                    <?=date("Y-m-d")?>
                  </div>
                  <p>Some content goes here...</p>
                </div>
              </div>
            </div>
          </div>




          <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment </i> Project Status</h6>
                  <small>Web Design</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Website Markup</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>One Page</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Mobile Template</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <small>Backend API</small>
                  <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</main>


<!-- Ajax script -->
<script>
  function change_image(file) {
    var myForm = new FormData();
    myForm.append("image", file);
    myForm.append("data_type", "profile-image");
    myForm.append("id", "<?=user('user_id')?>");

    send_data(myForm); 
  }

  function send_data(myForm) {
    var ajax = new XMLHttpRequest();
    ajax.addEventListener('readystatechange', function (e) {
      if (ajax.readyState == 4 && ajax.status == 200) {
        handle_result(ajax.responseText);
      }
    });

    ajax.open('post', '<?=ROOT?>/ajax', true);
    ajax.send(myForm);
  }

  function handle_result(result) {
    alert(result);
    console.log(result);
  }
  
</script>
<?php $this->view('footer');?>