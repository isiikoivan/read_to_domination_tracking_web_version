<?php
require_once 'db/DatabaseConnection.php';

//$db = new DatabaseConnection();
//$db->connection();
//
//$verse = $db->getVerseById(1);
//echo "<pre>";
//print_r($verse);
//echo "</pre>";

?>


<!DOCTYPE html>
<html>
<head id="header_id">
    <title>book</title>

</head>
<body>


<div class="container">
    <div class="sidebar-container">

        <a id="dashboard">
            <span><i class="fa fa-gauge icon_space"></i>Dashboard </span>
        </a>

        <a id="library">
            <span><i class="fa fa-water icon_space"></i>Library</span>
        </a>
        <a id="library_book_link">
            <span><i class="fa fa-book-open"></i>Book(s)</span>
        </a>

        <a id="users">
            <span><i class="fa fa-users"></i>User(s)</span>
        </a>

        <a id="logout">
            <span><i class="fa fa-power-off icon_space"></i>Log out</span>
        </a>

    </div>
    <div class="main-container">

    </div>
</div>

<script src="js/jquery3.7.1.js"></script>
<script src="js/router.js"></script>
</body>
</html>




























