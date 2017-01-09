   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header>
           <h1 class="entry-title"><?php the_title(); ?></h1>
       </header>
       <?php do_action( 'ELECTRON_THEME_SLUG_NAME_page_before_entry_content' ); ?>
       <div class="entry-content">
           <?php the_content(); ?>
           <?php edit_post_link( __( 'Edit', 'ELECTRON_THEME_TEXT_DOMAIN' ), '<span class="edit-link">', '</span>' ); ?>
       </div>
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'ELECTRON_THEME_TEXT_DOMAIN' ), 'after' => '</p></nav>' ) ); ?>
           <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'ELECTRON_THEME_SLUG_NAME_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'ELECTRON_THEME_SLUG_NAME_page_after_comments' ); ?>
   </article>