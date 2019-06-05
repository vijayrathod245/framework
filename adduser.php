<?php $this->load->view('admin/header'); ?>
        <main class="main-content bgc-grey-100">
          <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6">
              </div>
              <div class="masonry-item col-md-6">
                <div class="bgc-white p-20 bd">
                  <h6 class="c-grey-900">Add User
                  </h6>
                  <div class="mT-30">
                    <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">FullName
                        </label> 
                        <input type="text" name="fullname" value="<?php echo @$data['fullname']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter name"> 
                      </div>
					  <div class="form-group">
                        <label for="exampleInputEmail1">Address
                        </label> 
                        <input type="text" name="address" value="<?php echo @$data['address']; ?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter address"> 
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email
                        </label> 
                        <input type="email" name="email" value="<?php echo @$data['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password
                        </label> 
                        <input type="password" name="password" value="<?php echo @$data['password']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
					  <div class="form-group">
						<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="customRadio" name="gender" value="male">
						<label class="custom-control-label" for="customRadio">Male</label>
					  </div>
					  <div class="custom-control custom-radio custom-control-inline">
						<input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="female">
						<label class="custom-control-label" for="customRadio2">Female</label>
					  </div> 
					</div>
					<div class="form-group">
                        <label for="exampleInputPassword1">Phone
                        </label> 
                        <input type="text" name="phone" value="<?php echo @$data['phone']; ?>" class="form-control" placeholder="Phone">
                      </div>
					  <div class="form-group">
                          <label for="inputState">Country</label>
                          <select name="country" class="form-control">
                            <option selected>Choose...</option>
                            <option>India</option>
                          </select>
                        </div>
					  <div class="form-group">
                          <label for="inputState">State</label>
                          <select name="state" class="form-control">
                            <option selected>Choose...</option>
                            <option>Gujrat</option>
                          </select>
                        </div>
						<div class="form-group">
                          <label for="inputState">City</label>
                          <select name="city" class="form-control">
                            <option selected>Choose...</option>
                            <option>Surat</option>
                          </select>
                        </div>
						
						<div class="form-group">
						
                        <div class="custom-control custom-checkbox custom-control-inline">
						  <input type="checkbox" name="music" class="custom-control-input" id="defaultInline1">
						  <label class="custom-control-label" for="defaultInline1">Music</label>
						</div>

						<!-- Default inline 2-->
						<div class="custom-control custom-checkbox custom-control-inline">
						  <input type="checkbox" name="cricket" class="custom-control-input" id="defaultInline2">
						  <label class="custom-control-label" for="defaultInline2">Cricket</label>
						</div>

						<!-- Default inline 3-->
						<div class="custom-control custom-checkbox custom-control-inline">
						  <input type="checkbox" name="game" class="custom-control-input" id="defaultInline3">
						  <label class="custom-control-label" for="defaultInline3">Game</label>
						</div>
                      </div>
                      <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" name="image"  class="form-control-file" id="exampleFormControlFile1">
							
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                      
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </main>
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
          <span>Copyright © 2017 Designed by 
            <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib
            </a>. All rights reserved.
          </span>
        </footer>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>