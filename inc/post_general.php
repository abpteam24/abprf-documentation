<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <section class="abrf-page" data-abrf-tab="#abrf_general">
        <div class="abrf-page-head">
            <h2>⚙️ General Settings (Per Property)</h2>
        </div>
        <div class="abrf-divider"></div>
        <p class="abrf-lead">The General Settings tab controls how a single property behaves inside RentalForge. Every setting here overrides the global default for this property only — other properties are not affected.</p>
        <div class="abrf-tbl-wrap">
            <table class="abrf-table">
                <thead>
                    <tr><th>Field / Option</th><th>What it does</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Rent Continue ?</th>
                        <td>Turn <strong>ON</strong> to keep renting this property, or <strong>OFF</strong> to close it for new bookings at once. Existing bookings stay unchanged. By default, <strong>ON</strong>.</td>
                    </tr>
                    <tr>
                        <th>Details Page Template</th>
                        <td>Choose the layout that the property details page uses (grid, group or your own theme layout). This lets different properties look different without editing any code.</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>Assign one or more categories to this property. You can pick from existing categories or create a new one right here.</td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td>Assign one or more locations to this property — useful when the same item is available at several branches.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4 class="abrf-h4">🛠️ How to update general settings</h4>
        <ol class="abrf-steps">
            <li>Open the property you want to edit.</li>
            <li>Go to the <strong>General Settings</strong> tab.</li>
            <li>Change the switches or selections you need.</li>
            <li>Click <strong>Update</strong> to save.</li>
        </ol>
        <figure class="abrf-imgcard">
            <img src="<?php echo esc_url( ABRF_DOC_URL . '/' ); ?>image/general_configuration.png" alt="General Configuration Overview">
            <figcaption>General Configuration Overview</figcaption>
        </figure>
    </section>
<?php
