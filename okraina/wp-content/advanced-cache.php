<?php
/* PageSpeed Ninja Caching */
defined('ABSPATH') || die();
define('PAGESPEEDNINJA_CACHE_DIR', '/var/www/demopro_ga/data/www/cms.demopro.ga/okraina/wp-content/plugins/psn-pagespeed-ninja/cache');
define('PAGESPEEDNINJA_CACHE_PLUGIN', '/var/www/demopro_ga/data/www/cms.demopro.ga/okraina/wp-content/plugins/psn-pagespeed-ninja');
define('PAGESPEEDNINJA_CACHE_RESSDIR', '/var/www/demopro_ga/data/www/cms.demopro.ga/okraina/wp-content/plugins/psn-pagespeed-ninja/ress');
define('PAGESPEEDNINJA_CACHE_DEVICEDEPENDENT', true);
define('PAGESPEEDNINJA_CACHE_TTL', 86400);
define('PAGESPEEDNINJA_CACHE_GZIP', 1);
include '/var/www/demopro_ga/data/www/cms.demopro.ga/okraina/wp-content/plugins/psn-pagespeed-ninja/public/advanced-cache.php';
