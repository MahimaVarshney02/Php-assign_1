<?php
function truncateTitle($title) {
    if (strlen($title) > 50) {
        $title = substr($title, 0, 50);
    }
    return $title;
}
$articleTitle = "Your article title here, which might be longer than 50 characters.";
$truncatedTitle = truncateTitle($articleTitle);
echo $truncatedTitle;
?>