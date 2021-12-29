<?php
// File: api/assets.php
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$file = $queries['file'];

// TODO: /css/app.css?id=63d00dfbd8cde5c569e7 was not loaded because its MIME type, “text/html”, is not “text/css”.
echo require __DIR__ . '/../' . $file;