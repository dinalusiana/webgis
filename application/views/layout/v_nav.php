<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
				    <li class="text-center">
                    <img src="<?= base_url() ?>template/assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="<?= base_url('home') ?>"><i class="fa fa-globe"></i> Pemetaan</a>
                    </>
                    <li>
                        <a href="<?= base_url('rumahsakit') ?>"><i class="fa fa-hospital-o"></i> Rumah Sakit</a>
                    </li>

                    <?php if($this->session->userdata('username')<>""){ ?>
                    <li>
                        <a href="<?= base_url('rumahsakit/input') ?>"><i class="fa fa-plus"></i> Input Rumah Sakit</a>
                    </li>
                    <li>
                        <a href="<?= base_url('user') ?>"><i class="fa fa-users"></i> User</a>
                    </li>	
                    <li>
                        <a href="<?= base_url('user/input') ?>"><i class="fa fa-plus"></i> Input User</a>
                    </li>	
                    <?php } ?>	
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $title ?></h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />