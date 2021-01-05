<?php

    if(isset($_SESSION['email']) && isset($_SESSION['name']))
    {
        $email=$_SESSION['email'];
        $identify=$_SESSION['name'];

    }   
    else
    {
        echo '<script>alert("You are not logged in");</script>';
        echo '<script>document.location="login.php";</script>';
    }
?>

	<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
					

						<!-- Header actions start -->
						<ul class="header-actions">
							
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Admin</span>
									<span class="avatar">
										<img src="img/user24.png" alt="avatar">
										<span class="status busy"></span>
									</span>
								</a>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>