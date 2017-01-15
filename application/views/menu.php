<div class="navbar navbar-default">
	    <div class="container">
	        <div class="navbar-header">
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="<?php echo base_url(); ?>">ഒരുമ</a>
	        </div>
	        <center>
	            <div class="navbar-collapse collapse" id="navbar-main">
	                <ul class="nav navbar-nav">
	                    <li><a href="<?php echo base_url(); ?>">Home</a>
	                    </li>
	                    <li><a href="<?php echo base_url('news'); ?>">News</a>
	                    </li>
	                    <li><a href="<?php echo base_url('about'); ?>">About Us</a>
	                    </li>
	                    <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a>
	                    </li>
	                </ul>
	                <?php
	                if(!isset($_SESSION['user'])&&!isset($_SESSION['admin'])&&!isset($_SESSION['emp']))
	                {
	                ?>
	                <form name="login" method="post" action="<?php echo base_url('user/verify');?>" class="navbar-form navbar-right" role="search">
	                    <div class="form-group">
	                        <input type="text" class="form-control" name="username" placeholder="Username" required="">
	                    </div>
	                    <div class="form-group">
	                        <input type="password" class="form-control" name="password" placeholder="Password" required=""> 
	                    </div>
	                    <button type="submit" class="btn btn-primary">Sign In</button>
	                </form>
	                <?php
	                }
	                else
	                {
	                	?>
	                	<!--Nav Account-->
	                	<ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                        <strong><?php if(isset($_SESSION['user'])) echo $_SESSION['user']; if(isset($_SESSION['admin'])) echo $_SESSION['admin']; if(isset($_SESSION['emp'])) echo $_SESSION['emp']; ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php if(isset($_SESSION['user'])) echo $_SESSION['user']; if(isset($_SESSION['admin'])) echo $_SESSION['admin']; if(isset($_SESSION['emp'])) echo $_SESSION['emp']; ?></strong></p>
                                        <p class="text-left">
                                        	<?php if(isset($_SESSION['user'])) { ?>
                                            <a href="<?php echo base_url('sales');?>" class="btn btn-primary btn-block btn-sm">Show Sales</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider navbar-login-session-bg"></li>
                        <!--Beggin Of Balance-->
                        <?php if(isset($_SESSION['user'])) { ?>
                        <li><a href="#"><b><li>Balance <?php 
                        $sql="SELECT `balance` FROM `account` WHERE `username`=?";
                        $querybal=$this->db->query($sql, array($_SESSION['user']));
                        $rowbal=$querybal->result();
                        echo $rowbal[0]->balance;
                        ?>&nbsp Rs</li><?php } ?><span class="pull-right"></span></b></a></li>
                        <!--End Of Balance-->
                         <li><a href="<?php echo base_url('settings'); ?>">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li class="divider"></li>
            <?php if(isset($_SESSION['user'])||isset($_SESSION['admin'])||isset($_SESSION['emp'])) { ?>
            <li><a href="<?php echo base_url('logout'); ?>">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
            <?php 
        	}
        	?> 
                    </ul>
                </li>
            </ul>
            <!--Nav Account-->
	                	<?php
	                }
	                ?>
	            </div>
	        </center>
	    </div>
	</div>