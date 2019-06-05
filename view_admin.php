<?php $this->load->view('admin/header'); ?>
<main class="main-content bgc-grey-100">
          <div id="mainContent">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Admin List
                    </h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Id
                          </th>
                          <th>Name
                          </th>
                          <th>Email
                          </th>
                          <th>Password
                          </th>
                          <th>Image
                          </th>
						  <th>Status
                          </th>
                          <th>Action
                          </th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Id
                          </th>
                          <th>Name
                          </th>
                          <th>Email
                          </th>
                          <th>Password
                          </th>
                          <th>image
                          </th>
						  <th>Status
                          </th>
                          <th>Action
                          </th>
                        </tr>
                      </tfoot>
                      <?php foreach($data as $row){?>
                        <tr>
                          <td><?php echo $row['id']; ?>
                          </td>
                          <td><?php echo $row['name']; ?>
                          </td>
                          <td><?php echo $row['email']; ?>
                          </td>
                          <td><?php echo $row['password']; ?>
                          </td>
                          <td><img src="<?php echo base_url('image/'.@$row['image']);?>" width="50px" height="50px" >
                          </td>
						  <td>
							<?php 
								$status = $row['status'];
								if($status == 'active'){  ?>
									<a href="<?php echo base_url();?>/admin/admin/update_status?sid=<?php echo $row['id']; ?>&sval=<?php echo $row['status']; ?>" class="btn btn-success">Active</a>
								<?php }else{
									?>
									<a href="<?php echo base_url();?>/admin/admin/update_status?sid=<?php echo $row['id']; ?>&sval=<?php echo $row['status']; ?>" class="btn btn-danger">Inactive</a>
									<?php 
								}
						  ?>
						  
                          </td>
                          <td><a href="<?php echo site_url('admin/admin/delete/'.$row['id']);?>">Delete</a>||
							<a href="<?php echo site_url('admin/admin/select/'.$row['id']); ?>">Update</a>
						  </td>
                        </tr>
                        <?php }?>
                    
                    </table>
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