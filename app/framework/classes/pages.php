<?php
function load()
{
    $page = $_GET['page'] ?? 1;

    $query['currentPage'] = (int)strip_tags($page);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if (!file_exists($page)) {
        $page = "pages/erro404.php";
    };
    return $page;
};
