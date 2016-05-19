   <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              <?php $avatar= $this->session->userdata('avatar');?>
              <?php $username= $this->session->userdata('username');?>
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('gui/assets/ultraviolet_avatar/'.$avatar.'');?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $username;?></h5>
              	  	
                      <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Settings Frontend</span>
                      </a>
                      <ul class="sub">
        <?php  foreach($query->result() as $tampil); ?>

                          <li><a  href="<?php echo base_url('index.php/admin_area/settings_front/'.$tampil->id_frontend.' ');?>">Settings Front</a></li>
                          <li><a  href="<?php echo base_url('index.php/admin_area/settings_front_profile/'.$tampil->id_profile.' ');?>">Settings Profile</a></li>
                          <li><a  href="panels.html">Settings Portofolio</a></li>
                          <li><a  href="<?php echo base_url('index.php/admin_area/settings_blog');?>">Kelola Blog</a></li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->