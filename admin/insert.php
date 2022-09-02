<?php
    $title = $_POST['title'];
    $seo = $_POST['seo'];
    $category = $_POST['category']; 
    $content = $_POST['content'];
    $author= $_POST['author'];

    $db = new mysqli("sql110.epizy.com","epiz_31931290","fge4zAHhcZ","epiz_31931290_blog_post",3306);

    if($db->connect_error) {
        echo("<script>console.log('Failed to link database: '.$db->connect_error)</script>");
    } else {
        echo("<script>console.log('Database conntected successfully')</script>");
    }
    
    $sql = "INSERT INTO `post` (`title`, `seo_titke`, `content`, `author`) VALUES ('$title', '$seo', '$content', '$author');";

    if($db->query($sql) === TRUE) {
        echo "Inserted successfully";
    } else {
        echo "Failed to insert " . $db->error;
    }

    $db->close();
?>
