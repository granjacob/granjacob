<?php

session_start();

// Load WordPress
define('WP_USE_THEMES', false);
require_once 'blog/wp-load.php';

$uri = isset($_GET['uri']) ? sanitize_text_field($_GET['uri']) : '';

$pages = get_pages();

// Query for categories
$categories = get_categories([
    'orderby' => 'name',
    'order' => 'ASC',
]);

$page_path = 'gran-jacob';

$welcome_url = 'gj/' . $page_path . '/home';

$parent_page = get_page_by_path($page_path);

if ($parent_page) {
    $parent_page_id = $parent_page->ID;
}


// Query for child pages
$child_pages_query = new WP_Query([
    'post_type' => 'page',
    'post_parent' => $parent_page_id,  // Set parent page ID
    'orderby' => 'menu_order',  // Order by title
    'order' => 'ASC',  // Order ascending
    'posts_per_page' => -1  // Retrieve all child pages
]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GRAN JACOB S.A.S - Welcome to the seed!</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/styles.css?uniqid=<?php print uniqid(); ?>">

    <style>


    .hero {
      background-color: #e6e6e6;
      padding: 100px 0;
      text-align: center;
    }
    .feature {
      padding: 50px 0;
    }
    .footer {
      background-color: #333;
      color: #fff;
      padding: 30px 0;
    }

    .navbar-logo {
      height: 33px;
      /* Add additional styles if needed */
    }
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="http://granjacob.com">
      <img src="/images/granjacob-logo-blue.svg" alt="GRAN JACOB Logo" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ml-auto">
            <?php while ($child_pages_query->have_posts()) : $child_pages_query->the_post(); ?>
                <li class="nav-item nav-link <?php if (get_page_uri() == $page_path . '/' . $uri) echo 'active'; ?>">
                    <a class="nav-link" href="/gj/<?php print get_page_uri(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>

            <li class="nav-item nav-link" >
                <a class="nav-link" href="/members" style="background-color:red; color:white;">Members</a>
            </li>
        </ul>

    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero <?php if (!empty($uri)) print "nothomepage"; ?>">
    <?php
    if (!empty($uri)) {
        // Query for the page by its slug
        $page = get_page_by_path('gran-jacob/' . $uri);


        if ($page) {

            global $wp_query;
            $wp_query->set('page_id', $page->ID);
            $wp_query->is_page = true;
            $wp_query->is_singular = true;

            ?>
            <div class="container text-start">
                <?php
                echo '<h1>' . esc_html(get_the_title($page)) . '</h1>';
                echo apply_filters('the_content', $page->post_content);
                ?>
            </div>


            <?php

        } else {
           include( "404.php" );
        }
    } else {
?>

        <div class="container">
            <h1>Welcome to GRAN JACOB</h1>
            <p>Your financial partner for life</p>
            <a href="<?php print $welcome_url; ?>" class="btn btn-primary">Learn More</a>
        </div>
    <?php
    }
    ?>


</section>

<!-- Feature Section -->
<section class="feature">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="/images/pinion.svg" height="300" width="300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">NEPTUNEQL</h5>
            <p class="card-text">Manage your personal accounts with ease.</p>
            <a href="/projects/neptuneql" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="/images/pinion.svg" height="300" width="300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ANGLOBLOG</h5>
            <p class="card-text">Solutions to help your business grow.</p>
            <a href="/projects/angloblog" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="/images/pinion.svg" height="300" width="300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">FINANCIAL SERVICES</h5>
            <p class="card-text">Plan your financial future with us.</p>
            <a href="/projects/financial" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>


  </div>
</section>
<section class="language" style="background-color:#666;">
    <div class="container text-center" >
        <p>Select your preferred language</p>
        <form action="setlanguage.php" method="post" >
            <input type="hidden" value="en" name="lang" id="lang"/>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" data-lang="es" class="setlanguage text-white">Spanish</a></li>
            <li class="list-inline-item"><a href="#" data-lang="en" class="setlanguage text-white">English</a></li>
        </ul>
        </form>
    </div>
</section>
<!-- Footer -->
<footer class="footer">

  <div class="container text-center">
    <p>&copy; 2024 GRAN JACOB S.A.S. All rights reserved.</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#" class="text-white">Privacy Policy</a></li>
      <li class="list-inline-item"><a href="#" class="text-white">Terms of Use</a></li>
      <li class="list-inline-item"><a href="#" class="text-white">Contact</a></li>
    </ul>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>