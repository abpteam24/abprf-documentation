<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_post">
        <div class="abrf-page-head">
            <h2>📝 RentalForge - Post Lists</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Here you can view all RentalForge posts in one place. You can easily create, clone, edit, restore, or delete posts. Each post includes a short summary, shortcode usage, total properties/tools count, status, and other important rental details for quick and efficient management.</p>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/post_lists.png" alt="Post Lists Overview">
            <figcaption>Post Lists Overview</figcaption>
        </figure>
        <h4 class="abrf-h4">📋 Available Actions</h4>
        <ul class="abrf-list">
            <li><strong>🔁 Clone Post:</strong> Create an exact duplicate of the selected post. The cloned post is saved as a draft and can be freely edited or customized.</li>
            <li><strong>♻️ Restore Post:</strong> Recover a previously deleted or archived post and restore it back to the post list.</li>
            <li><strong>❌ Permanent Delete:</strong> Permanently remove the selected post from the system. This action cannot be undone.</li>
            <li><strong>✍️ Edit Post:</strong> Modify and update existing post content, settings, and configurations at any time.</li>
            <li><strong>👁️ View Post:</strong> Preview how the post will appear on the live frontend website.</li>
            <li><strong>🗑️ Move to Trash:</strong> Move the post to trash instead of permanently deleting it. You can restore it later if needed.</li>
        </ul>
        <h4 class="abrf-h4">🔄 Next Steps</h4>
        <p class="abrf-p">After clicking Clone, Edit, or Add New Post, you will be redirected to the Post Details Page, where you can manage all post-related information in a structured and user-friendly interface.</p>
        <p class="abrf-p">This page allows you to fully configure your post content before publishing or updating.</p>
    </section>
<?php
