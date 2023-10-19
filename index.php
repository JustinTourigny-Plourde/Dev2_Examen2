<?php get_header(); ?>

<body>
    <div class="container contenuprincipal">
        <hr class="divider">
        <h1 id="titreh1">Formation PUB020 : WordPress, 2023</h1>
        <hr class="divider bas">
        <br>
        <div class="formations">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
            ?>
                <div class="post">
                    <?php
                    // Display the post title
                    the_title("<div class='form'>", '</div>');

                    if (comments_open() && get_comments_number() > 0) :
                    ?>
                        <ul>
                            <?php
                            // Display the comments for the current post
                            $comments = get_comments(array('post_id' => get_the_ID()));
                            foreach ($comments as $comment) {
                                echo "<p class='comment'>$comment->comment_content</p>";
                            }
                            ?>
                        </ul>
                    <?php
                    endif;
                    ?>
                </div>
            <?php
                endwhile;
            else :
                echo 'No posts found.';
            endif;
            ?>
        </div>
    </div>

    <div class="container contenusecondaire">
        <p>Site fièrement hébergé chez <a href="https://www.a2hosting.com/">A2 Hosting.</a></p><br>

        <a href="https://www.a2hosting.com?aid=5ca65a17be949&amp;bid=ed1c4a67" target="_top">
            <img src="https://affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" width="728" height="90">
        </a>
    </div>
</body>
</html>

<?php get_footer(); ?>
