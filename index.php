<?php

session_start();




// Load WordPress
define('WP_USE_THEMES', false);
require_once 'blog/wp-load.php';




$uri = isset($_GET['uri']) ? sanitize_text_field($_GET['uri']) : '';

function includePage( $requestUri )
{
    if (file_exists("pages/{$requestUri}.php"))
        include("pages/{$requestUri}.php");
}
function pageExists()
{
    return file_exists( "pages/" . trim( $_SERVER['REQUEST_URI'], '/' ) . ".php" );
}


$pages = get_pages();

// Query for categories
$categories = get_categories([
    'orderby' => 'name',
    'order' => 'ASC',
]);


$pathBaseContent = str_replace( ".", "-", $_SERVER['HTTP_HOST'] );

$welcome_url =  $pathBaseContent . '/home';

$parent_page = get_page_by_path($pathBaseContent . "/main" );

$child_pages_query = null;


if ($parent_page) {
    $parent_page_id = $parent_page->ID;



    // Query for child pages
    $child_pages_query = new WP_Query([
        'post_type' => 'page',
        'post_parent' => $parent_page_id,  // Set parent page ID
        'orderby' => 'menu_order',  // Order by title
        'order' => 'ASC',  // Order ascending
        'posts_per_page' => -1  // Retrieve all child pages
    ]);

}
else {
	$child_pages_query = new WP_Query([]);
}


if ($_SERVER['REQUEST_URI'] === '/')
    $_SERVER['REQUEST_URI'] = $pathBaseContent . '/start-page';

if (pageExists())
    $finalPage = $_SERVER['REQUEST_URI'];
else
if (!empty( $uri ))
    $finalPage = "wpcontent";
else
    $finalPage = "404";

$currentUrlHomeHost = 'http://' . $_SERVER['HTTP_HOST'];

function getPage( $path )
{
    global $pathBaseContent;

    return '/' . $pathBaseContent . '/' . $path;
}

function getPageCurrent( $page )
{
    global $pathBaseContent;

    return $_SERVER['REQUEST_URI'] . '/' . $page;
}

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
<body class="<?php print $pathBaseContent; ?>">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php print $currentUrlHomeHost; ?>">
      <img src="/images/<?php print $pathBaseContent; ?>-logo.svg" alt="GRAN JACOB Logo" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarNav">
	    <?php includePage( $pathBaseContent . '/mainmenu' ); ?>



    </div>
  </div>
</nav>

<section class="hero <?php if (!pageExists() or !empty($uri)) print "nothomepage"; ?>">
    <?php includePage( $finalPage ); ?>
</section>
<!-- Feature Section -->
<?php includePage( $pathBaseContent . '/features' ); ?>

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
    <p>&copy; 2024 GRAN JACOB S.A.S. All rights reserved.<br/>
    <a href="http://granjacob.com/">www.granjacob.com</a>
    </p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="<?php print getPage( 'info/privacy-policy' ); ?>" class="text-white">Privacy Policy</a></li>
      <li class="list-inline-item"><a href="<?php print getPage( 'info/terms-of-use' ); ?>" class="text-white">Terms of Use</a></li>
      <li class="list-inline-item"><a href="<?php print getPage( 'main/contact' ); ?>" class="text-white">Contact</a></li>
    </ul>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>

<script src="/js/script.js"></script>
</body>
</html>