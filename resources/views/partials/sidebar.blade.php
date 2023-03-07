<?php 
$page_id = 'dashboard';
?>
<div class="static-sidebar-wrapper sidebar-default">
    <div class="static-sidebar">
        <div class="sidebar">
			<div class="widget">
		        <div class="widget-body">
		            <div class="userinfo pb-n pt-xs">
		                <div class="avatar">
		                	<img class="img-circle" src="demo/avatar/avatar_01.png" class="img-responsive img-circle" width="65px" height="65px"/>
						</div>
		                <div class="info">
		                    <h6 class="username mb-n"> qwerty
		                    	<?php
		                    		if(Session::get('role')=='0')
		                    			echo Session::get('owner_name');
		                    		elseif(Session::get('role')=='1')
		                    			echo Session::get('owner_name');
		                    		elseif(Session::get('role')=='2')
		                    			echo Session::get('user_name');

		                    	?>
		                    </h6>
		                    <h6 class="useremail mb-n"><?php echo Session::get('username'); ?></h6>
		                </div>
		            </div>
		        </div>
		    </div>
			<div class="widget stay-on-collapse" id="widget-sidebar">
				<nav role="navigation" class="widget-body">
					<ul class="acc-menu">
						<li class="nav-separator">
							<span>Your Menu</span>
						</li>

						<li class="<?php if($page_id=='dashboard.php'){ echo "active"; } ?>">
							<a href="dashboard.php">
								<i class="ti ti-home"></i><span>Dashboard</span>
							</a>
						</li>
						<?php
							if(Session::get('role')=='0')
							{
						?>
						<li class="<?php if($page_id=='manage_mobile_shop.php'){ echo "active"; } ?>">
							<a href="manage_mobile_shop.php">
								<i class="ti ti-user"></i><span>Manage Mobile Shop</span>
							</a>
						</li>
						<?php
							}
							elseif(Session::get('role')=='1')
							{
						?>
						<li class="<?php if($page_id=='manage_purchase_master.php'){ echo "active"; } ?>">
							<a href="manage_purchase_master.php">
								<i class="ti ti-view-list-alt"></i><span>Purchase Master</span>
							</a>
						</li>
						<li class="hasChild <?php if($page_id=='sale_invoice.php'){ echo " open "; } ?>"><a href="javascript:;"><i class="ti ti-layout"></i><span>Management Projects</span></a>
							<ul class="acc-menu">
								<li class='<?php if($page_id=='manage_brand.php'){ echo "active"; } ?>'>
									<a href="manage_brand.php">Manage Brands</a>
								</li>
								<li class="<?php if($page_id=='manage_product_category.php'){ echo "active";} ?>">
									<a href="manage_product_category.php">Manage Product Category</a>
								</li>
								<li class="<?php if($page_id=='manage_product.php'){ echo "active";} ?>">
									<a href="manage_product.php">Manage Product</a>
								</li>
							</ul>
						</li>
						
						<li class="<?php if($page_id=='manage_user.php'){ echo "active"; } ?>">
							<a href="manage_user.php">
								<i class="ti ti-user"></i><span>Manage User</span>
							</a>
						</li>
						<li class="<?php if($page_id=='manage_stock.php'){ echo "active"; } ?>">
							<a href="manage_stock.php">
								<i class="ti ti-user"></i><span>Manage Stock(s)</span>
							</a>
						</li>
						<!-- <li class="<?php if($page_id=='invoice.php'){ echo "active"; } ?>">
							<a href="invoice.php">
								<i class="ti ti-user"></i><span>Sell Products</span>
							</a>
						</li> -->
						<?php
							}
							elseif(Session::get('role')=='2')
							{
						?>
						<!-- <li class="<?php if($page_id=='invoice.php'){ echo "active"; } ?>">
							<a href="invoice.php">
								<i class="ti ti-user"></i><span>Sell Products</span>
							</a>
						</li> -->
						<?php
							}
						?>
						<li class="hasChild <?php if($page_id=='manage_customer.php'){ echo " open "; } ?>"><a href="javascript:;"><i class="ti ti-layout"></i><span>Ledger Master</span></a>
							<ul class="acc-menu">
								<li class='<?php if($page_id=='manage_customer.php'){ echo "active"; } ?>'>
									<a href="manage_customer.php">Manage Customer</a>
								</li>
								<li class='<?php if($page_id=='sale_invoice.php'){ echo "active"; } ?>'><a href="sale_invoice2.php">Create Invoice/ Sale</a></li>
								<li class='<?php if($page_id=='add_payment.php'){ echo "active"; } ?>'><a href="add_payment.php">Add Payment</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<div class="widget mt" id="widget-progress">
				<h5 class="idget-heading m-n text-center" style="color:white"><b>Sutech India Pvt. Ltd.	</b></h5>
		        <div class="widget-body">
		            <div class="mini-progressbar">
		                <div class="clearfix mb-sm">
		                    <div class="pull-left" style="color:white">Developed By: </div>
		                    <div class="pull-right" style="color:white">Er. Suraj Singh Kushwaha</div>
		                </div>
		              	<div class="progress">    
		                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
		                </div>
		            </div>
		            <div class="mini-progressbar mt-n pt-n">
		                <div class="clearfix mb-sm">
		                    <div class="pull-left" style="color:white">Contact No:</div>
		                    <div class="pull-right" style="color:white">+91-8115433516</div>
		                </div>
		                <div class="progress">    
		                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
		                </div>
		            </div>
		            <div class="mini-progressbar mt-n pt-n">
		                <div class="clearfix mb-sm">
		                    <div class="pull-left" style="color:white">Email ID:</div>
		                    <div class="pull-right" style="color:white">er.surajsingh16@gmail.com</div>
		                </div>
		                <div class="progress">    
		                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
</div>