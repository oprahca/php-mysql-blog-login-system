# PHP MySQL Blog Posts with Login System
1. Data remoted to connect 'infinityfree.net' (sql110.epizy.com:3306) without using localhost database.
2. Insert SQL query example: ```INSERT INTO `post` (`id`, `title`, `seo_titke`, `content`, `author`, `date`) VALUES (NULL, '$title', '$seo', 'content', '$author', current_timestamp());``` if it escaped `` or '' that will be error. Also, $author using hidden input to get the value, default 0.
3. 