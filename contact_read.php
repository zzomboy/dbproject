<?php
	session_start();
	require_once('connect.php');
	include("template.class.php");
	if(!isset($_SESSION['username']))
	{
		$user_login = false;
		$layout_header = new Template("layout_header.tpl");
		$layout_footer = new Template("layout_footer.tpl");
	}
	else{
		$user_login = true;
		if($_SESSION['type'] == 'admin'){
			$layout_header = new Template("layout_login_header_admin.tpl");
			$layout_footer = new Template("layout_login_footer_admin.tpl");
		}
		else{
			$layout_header = new Template("layout_login_header.tpl");
			$layout_footer = new Template("layout_login_footer.tpl");
		}
		$uid = $_SESSION['uid'];
	}
	$layout_header->set('title','View contact : IT Online Shopping website');
	echo $layout_header->output();
?>
<!--Content-->
<div class="user_full">
	<div class="user_left">
		<table class="user_menu">
			<tr>
				<th>
					Admin page
				</th>
			</tr>
			<tr>
				<td>
					<a href="admin.php">Product management</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="admin_add_product.php">Add Product</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="admin_check_order.php">User Orders</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="admin_user.php">User management</a>
				</td>
			</tr>
			<tr>
				<td class="active">
					<a href="contact_read.php">View Messages</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="ucart_right" >
		<form class="form_input" method="post">
	      <div class="ucart_box" >
	        <h3>Messages</h3>
	        <table class="order_tb admin_con_tb" style="width: 100%;table-layout: fixed;">
	          <tr>
	            <th></th>
	            <th>Name</th>
	            <th>Email</th>
	            <th>Subject</th>
	            <th>Reply</th>
	          </tr>
	      <?PHP
	      	
	      		$sql	= "select * from user where user_id != $uid";
	      		$result = $mysqli->query($sql) or die("error=$sql");
	          while($row=$result->fetch_array()){
	      ?>
	          <tr>
	            <td><?php echo $row['user_id']; ?></td>
	            <td><?php echo  $row['user_name']; ?></td>
	            <td><?php echo  $row['user_email']; ?></td>
	            <td>
	              <select style="margin:0px 0px 0px 0px;width: 100%;" class="sortby_tool" onchange="location = value;">
	                <option value="admin_type_user.php?type=admin&uid=<?php echo $row['user_id']; ?>" <?php if($row['user_type']=="admin"){echo "selected";} ?> >admin</option>
	                <option value="admin_type_user.php?type=member&uid=<?php echo $row['user_id']; ?>" <?php if($row['user_type']=="member"){echo "selected";} ?> >member</option>
	              </select>
	            </td>
	            <td>
	                <a href="del_user.php?delete_id=<?php echo $row['user_id']; ?>" class="confirmation"><img src='img/pro_delete.png' width='24' height='24'></a>
	            </td>
	          </tr>
	      <?PHP
	      	}
	      ?>
	        </table>
	      </div>
	    </form>
	</div>
	<div class="clear"></div>
</div>
<?php
	echo $layout_footer->output();
?>
