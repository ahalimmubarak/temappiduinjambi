<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="mt-10">
    <?php if ( have_comments() ) : ?>
        <h2 class="text-2xl font-bold mb-6">
            <?php
                printf(
                    _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
                    number_format_i18n( get_comments_number() )
                );
            ?>
        </h2>

        <ol class="space-y-6 mb-6">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
                'max_depth'   => 4, // penting biar reply bisa nested
                'callback'    => function($comment, $args, $depth) {
                    $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
                    ?>
                    <<?php echo $tag; ?> <?php comment_class('border border-gray-300 bg-gray-50 p-4 mt-2'); ?> id="comment-<?php comment_ID(); ?>">
                        <div class="flex items-start space-x-4">
                            <?php echo get_avatar( $comment, 48, '', '', array( 'class' => 'rounded-full' ) ); ?>
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h5 class="font-semibold text-gray-900">
                                        <?php comment_author(); ?>
                                    </h5>
                                    <span class="text-xs text-gray-500"><?php comment_date(); ?></span>
                                </div>
                                <div class="mt-2 text-gray-700">
                                    <?php comment_text(); ?>
                                </div>
                                <div class="mt-3">
                                    <?php
                                    comment_reply_link( array_merge( $args, array(
                                        'reply_text' => 'Reply',
                                        'depth'      => $depth,
                                        'max_depth'  => $args['max_depth'],
                                        'before'     => '<span class="text-sm text-secondary hover:underline">',
                                        'after'      => '</span>'
                                    ) ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ) );
            ?>
        </ol>

        <?php the_comments_pagination(array(
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;',
        )); ?>

    <?php endif; ?>

    <?php
    if ( comments_open() ) {
        comment_form( array(
            'class_form'   => 'space-y-4 mt-8',
            'title_reply'  => '<span class="text-xl font-bold">Komentar</span>',
            'class_submit' => 'border border-gray-300 bg-gray-50 hover:text-white hover:bg-secondary focus:outline-2 focus:outline-offset-2 focus:outline-secondary active:bg-secondary font-semibold px-5 py-3 cursor-pointer transition rounded-xl',
            'comment_field' => '<textarea id="comment" name="comment" class="w-full bg-gray-50 border border-gray-300 focus:outline-2 focus:outline-offset-2 focus:outline-secondary p-3 rounded-xl" rows="4" required></textarea>',
            'fields' => array(
                'author' => '<input id="author" name="author" type="text" placeholder="Name" class="w-full border bg-gray-50 border-gray-300 focus:outline-2 focus:outline-offset-2 focus:outline-secondary p-3 rounded-xl" />',
                'email'  => '<input id="email" name="email" type="email" placeholder="Email" class="w-full border bg-gray-50 border-gray-300 focus:outline-2 focus:outline-offset-2 focus:outline-secondary p-3 rounded-xl" />',
            )
        ) );
    }
    ?>
</div>

<style>
/* Styling nested comments */
#comments .children {
    margin-left: 2rem; /* Indent */
    border-left: 2px solid rgba(0,0,0,0.05);
    padding-left: 1rem;
}
</style>