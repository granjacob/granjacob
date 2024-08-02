<?php global $child_pages_query; ?>
<ul class="navbar-nav ml-auto">
	<?php while ($child_pages_query->have_posts()) : $child_pages_query->the_post(); ?>
		<li class="nav-item nav-link <?php if (get_page_uri() == $uri) echo 'active'; ?>">
			<a class="nav-link" href="/<?php print get_page_uri(); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>

	<li class="nav-item nav-link" >
		<a class="nav-link" href="/members" style="background-color:red; color:white;">Members</a>
	</li>
</ul>