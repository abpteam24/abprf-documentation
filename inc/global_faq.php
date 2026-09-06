<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_faq_global">
        <div class="abrf-page-head">
            <h2>❓ RentalForge – Global FAQ Configuration</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">Here you can add frequently asked questions that are shown globally on the rental page. FAQ entries created here are inherited by every item unless an item overrides its own FAQ.</p>

        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr><th>Question</th><td>Write the question customers usually ask, e.g. "How do I cancel my booking?"</td></tr>
                    <tr><th>Answer</th><td>Provide a clear and concise answer for the question.</td></tr>
                    <tr><th>Order</th><td>Drag or set the order in which the questions are displayed.</td></tr>
                </tbody>
            </table>
        </div>

        <ol class="abrf-steps">
            <li>Click <strong>Add FAQ</strong> and enter the question and answer.</li>
            <li>Save the settings. The FAQ section appears on items that inherit the global FAQ.</li>
        </ol>
    </section>
<?php
