<?php
get_header(); 
?>
    <main>

        <article>
            <header>
                <h1><?php the_title(); ?></h1>
                <button>#</button>
            </header>

<?php the_content(); ?>
        </article>

    </main>
<?php

get_footer(); 