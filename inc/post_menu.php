<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abprf_post">
        <h2 class="_abprf_color_theme">RentalForge - Post Lists </h2>
        <div class="_divider_xs"></div>
        <label>Here you can see all your RentalForge posts in one place. You can create, clone, edit, or delete posts easily. You will also get a short summary of each post, usable shortcodes, total properties/tools count, post status, and many other important rental information for quick management.</label>
        <div class="rf_image" data-image-href="<?php echo esc_url( ABPRF_DOC_URL . '/' ) ?>image/post_lists.png"><img class="_img_control_reflex_6" src="#" alt="Post Lists  "></div>
        <ul class="_abprf_list_margin_xs">
            <li><strong>🔁 Clone Post :</strong> Clicking the “Clone” icon allows you to easily create an exact duplicate of the current post. The cloned post will be generated as a new draft, which you can freely edit, update, or customize as needed.</li>
            <li><strong>♻️ Restore Post :</strong> Clicking the “Restore” icon allows you to quickly recover a previously deleted or archived post and bring it back to your post list.</li>
            <li><strong>❌Permanent Delete Post :</strong> Clicking the “Permanent Delete” icon will completely remove the selected post from the system without any possibility of recovery.</li>
            <li><strong>✍️ Edit Post :</strong> Clicking the “Edit” icon allows you to modify and update the existing post content anytime.</li>
            <li><strong>👁️view Post :</strong> Clicking the “View” icon allows you to see how the post will appear on the live website (frontend)..</li>
            <li><strong><span class="fas fa-trash _color_danger"></span>Move to Trash :</strong> Clicking the “Move to Trash” icon will send the selected post to the trash instead of permanently deleting it.</li>
        </ul>
        <label>After clicking Clone, Edit, or Add New Post, you will be redirected to the Post Details Page, where you can manage all information related to the post in a structured and user-friendly interface. </label>
        <label>This page allows you to fully control and configure your post content before publishing or updating.</label>
    </div>
<?php
