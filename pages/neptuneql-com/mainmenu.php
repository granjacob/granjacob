<?php

$menuItems = array(
	"0" => array( "url" => getPage( "main/home" ), "name" => "Home" ),
	"1" => array( "url" => getPage( "main/about" ), "name" => "About" ),
	"2" => array( "url" => getPage( "main/documentation" ), "name" => "Documentation" ),
	"3" => array( "url" => getPage( "main/support" ), "name" => "Support" )
);



?>
<ul class="navbar-nav ml-auto">
	<?php

	foreach ($menuItems as $menuItem) {
		?>
		<li class="nav-item nav-link ">
			<a class="nav-link"  href="<?php print $menuItem['url']; ?>"><?php print $menuItem['name']; ?></a>
		</li>
		<?php
	}

	?>
	<li class="nav-item nav-link" >
		<a class="nav-link" href="/members" style="background-color:red; color:white;">Members</a>
	</li>

	<li class="nav-item nav-link" >
		<a class="nav-link" href="/demo" style="background-color:forestgreen; color:white;">Demo</a>
	</li>
</ul>