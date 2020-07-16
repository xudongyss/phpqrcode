<?php
define('QR_MODE_NUL', -1);
define('QR_MODE_NUM', 0);
define('QR_MODE_AN', 1);
define('QR_MODE_8', 2);
define('QR_MODE_KANJI', 3);
define('QR_MODE_STRUCTURE', 4);

define('QR_ECLEVEL_L', 0);
define('QR_ECLEVEL_M', 1);
define('QR_ECLEVEL_Q', 2);
define('QR_ECLEVEL_H', 3);

define('QR_FORMAT_TEXT', 0);
define('QR_FORMAT_PNG',  1);

/* use cache - more disk reads but less CPU power, masks and format templates are stored there */
define('QR_CACHEABLE', false);
/* used when QR_CACHEABLE === true */
define('QR_CACHE_DIR', false);
/* default error logs dir */
define('QR_LOG_DIR', false);

define('QR_FIND_BEST_MASK', true);
define('QR_FIND_FROM_RANDOM', 2);
define('QR_DEFAULT_MASK', 2);

define('QR_PNG_MAXIMUM_SIZE',  1024);
