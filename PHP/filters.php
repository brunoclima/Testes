<?php
var_dump(filter_var('bruno.ferreira@exemplo.com.br', FILTER_VALIDATE_EMAIL));
var_dump(filter_var('exemplo.com', FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED));

$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "You have searched for $search_html.\n";
echo "<a href='?search=$search_url'>Search again.</a>";
?>