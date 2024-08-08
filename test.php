<?php

require('core.php');

use system\jacobbe\services\CountryService;
$connect = new CountryService();

print_r( $connect->getAllCountries() );

?>