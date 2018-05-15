<?php

header('Cache-Control: no cache');
session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
session_cache_limiter('private_no_expire'); // Cliente não vai receber o header expirado.
session_start();

?>