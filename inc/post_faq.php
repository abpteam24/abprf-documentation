<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_faq">
        <div class="abrf-page-head">
            <h2>❓ FAQ Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The FAQ Configuration system allows you to manage frequently asked questions and answers for your clients. Like Additional Services, this feature supports both global and post-level configuration for maximum flexibility.</p>
        <h4 class="abrf-h4">🌍 Global FAQ</h4>
        <p class="abrf-p">From the Global Configuration panel, you can create and manage a standard set of FAQs that will be used across all posts.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Define global questions and answers</li>
            <li><strong>👉</strong> Enable or disable the FAQ section globally</li>
            <li><strong>👉</strong> Maintain a consistent FAQ structure for all properties</li>
        </ul>
        <h4 class="abrf-h4">🏠 Custom Post-Level FAQ</h4>
        <p class="abrf-p">Each individual post can also have its own custom FAQ configuration.</p>
        <ul class="abrf-list">
            <li><strong>👉</strong> Import FAQs from global configuration</li>
            <li><strong>👉</strong> Add new custom FAQs specific to that post</li>
            <li><strong>👉</strong> Modify imported questions and answers</li>
            <li><strong>👉</strong> Remove or reorder FAQs per post requirement</li>
        </ul>
        <h4 class="abrf-h4">🔄 Import &amp; Customization System</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> One-click import from global FAQs</li>
            <li><strong>👉</strong> Fully editable after import</li>
            <li><strong>👉</strong> Combine global and custom FAQs if needed</li>
            <li><strong>👉</strong> Control FAQ order and visibility</li>
        </ul>
        <h4 class="abrf-h4">⚙️ Smart Behavior</h4>
        <ul class="abrf-list">
            <li>Global FAQs act as a default knowledge base</li>
            <li>Each post can override or extend FAQs independently</li>
            <li>Global changes do not overwrite custom post-level FAQs</li>
        </ul>
        <h4 class="abrf-h4">🚀 Benefits</h4>
        <ul class="abrf-list">
            <li><strong>👉</strong> Reduces repetitive customer queries</li>
            <li><strong>👉</strong> Improves user experience with quick answers</li>
            <li><strong>👉</strong> Saves time with reusable FAQ templates</li>
            <li><strong>👉</strong> Provides a flexible and scalable system</li>
        </ul>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/faq_configuration.png" alt="FAQ Configuration Overview">
            <figcaption>FAQ Configuration Overview</figcaption>
        </figure>
    </section>
<?php
