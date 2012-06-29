<?php   

$lang = array(
	'ogone_redirect_title'				=> 'Ogone Offsite',
	'ogone_use_feedback_parameters' 	=> 'Is Ogone set to use transaction feedback parameters?',
	'ogone_pspid'						=> 'Mechant ID (PSPID)',
	'ogone_test_pspid'					=> 'Mechant Test ID (PSPID)',
	'ogone_sha_in_passphrase'			=> 'SHA IN Passphrase',
	'ogone_sha_out_passphrase'			=> 'SHA OUT Passphrase',
	'ogone_template_styles_header'		=> 'OGONE TEMPLATE STYLES',
	'ogone_page_title'					=> 'Ogone Page Title',
	'ogone_page_background_color'		=> 'Ogone Page Background Color (Hex Value)',
	'ogone_page_text_color'				=> 'Ogone Page Text Color (Hex Value)',
	'ogone_page_table_color'			=> 'Ogone Page Table Text Color (Hex Value)',
	'ogone_page_table_background_color'	=> 'Ogone Page Table Background Color (Hex Value)',
	'ogone_page_button_color'			=> 'Ogone Page Button Text Color  (Hex Value)',
	'ogone_page_button_background_color'	=>'Ogone Page Button Background Color (Hex Value)',
	'ogone_font'						=> 'Ogone Font Type',
	'ogone_left_column_background_color'	=> 'Ogone Left Column Background Color (Hex Value)',
	'ogone_left_column_text_color'		=> 'Ogone Left Column Text Color (Hex Value)',
	'ogone_left_column_font'			=> 'Ogone Left Column Font Type',
	'ogone_logo_url'					=> 'Secure Logo URL',
	'ogone_logo_url_note'				=> 'Link to JPG file must begin with HTTPS://',
	'ogone_non_matching_sha'			=> 'Non-matching SHA values suggest that URL was tampered with. ',
	'ogone_unknown_error'				=> 'An unknown error was returned. Status Code :',
	'ogone_authorized_and_canceled'		=> 'Authorized and Cancelled',
	'ogone_purchased_canceled'			=> 'Purchase cancelled by customer.',
	'ogone_payment_declined'			=> 'Payment declined',
	'ogone_order_id_not_specified'		=> 'Order ID was not returned in response from Ogone, order can not be completed.',
	'ogone_status_not_specified'		=> 'Status was not specified, so order can not be completed.', 
	'ogone_redirect_overview'			=> '
		<p>This gateway makes use of a file called extload.php which is contained in the CartThrob themes folder. You will need to edit this file if your EE system folder is not named "system" or has been moved to a different directory than the default</p>
		
		<h3>The following settings need to be configured at Ogone for this script to work correctly.</h3>
		<h4>Tab: Global Transaction Parameters</h4>
		<p><strong>Processing for Individual Transactions: </strong> "Always Online" or "Online but Switch to Offline"</p>
		
		<h4>Tab: Global Security Parameters</h4>
		<p><strong>Hashing Method: </strong> Sha-1</p>
		
		<h4>Tab: Data and Origin Verificationm</h4> 
		<p><strong>Checks for e-Commerce: </strong> Set "URL of the merchant page containing the payment form that will call the page:orderstandard.asp" to blank. You may try to add your main domain to this, but it may cause problems. It is best to test with this field set to blank, and later experiment with the domain setting. </p>
		<p><strong>SHA-IN Pass Phrase: </strong> Create a strong 16 character (or more) randomized string. Add that string to the settings below. </p>
		
		<h4>Tab: Transaction Feedback</h4>
		<p><strong>HTTP redirection in the browser: </strong>  Check "I want to receive transaction feedback parameters on the redirection URLs."</p>
		<p><strong>Direct HTTP server-to-server request: </strong> "Always Online" or "Online but Switch to Offline"</p>
		<p><strong>SHA-OUT Pass Phrase: </strong> Create a strong 16 character (or more) randomized string. Add that string to the settings below. </p>	',
	);
// Parameter Cookbook: https://secure.ogone.com/ncol/param_cookbook.asp

