<?php 
class Cartthrob_ogone_redirect extends Cartthrob_payment_gateway
{
	public $title = 'ogone_redirect_title';
	public $overview = "ogone_redirect_overview"; 
 	public $settings = array(
		array(
			'name' => 'mode',
			'short_name' => 'mode', 
			'type' => 'radio',
			'default' => 'test',
			'options' => array(
				'test' => 'test',
				'live' => 'live'
			),
		),
		array(
			'name' => 'ogone_use_feedback_parameters', 
			'short_name' => 'use_feedback', 
			'type' => 'radio',
			'default' => 'yes',
			'options' => array(
				'yes' => 'yes',
				'no' => 'no'
			),
		),
		array(
			'name' => 'ogone_pspid', 
			'short_name' => 'pspid_live', 
			'type' => 'text', 
		),
		array(
			'name' => 'ogone_test_pspid', 
			'short_name' => 'pspid_test', 
			'type' => 'text', 
		),
		array(
			'name' => 'ogone_sha_in_passphrase', 
			'short_name' => 'passphrase', 
			'type' => 'text', 
		),
		array(
			'name' => 'ogone_sha_out_passphrase', 
			'short_name' => 'out_passphrase', 
			'type' => 'text', 
		),
		// OGONE LAYOUT 
		array(
			'name' => 'ogone_template_styles_header',
			'short_name' => 'template_styles',
			'type' => 'header',
		),
		array(
			'name' => 'ogone_page_title', 
			'short_name' => 'style_title', 
			'type' => 'text', 
		),
		array(
			'name' => 'ogone_page_background_color', 
			'short_name' => 'style_bgcolor', 
			'type' => 'text', 
			'default' => '#FFFFFF',
		),
		array(
			'name' => 'ogone_page_text_color', 
			'short_name' => 'style_text_color', 
			'type' => 'text', 
			'default' => '#000000',
			
		),
		array(
			'name' => 'ogone_page_table_color', 
			'short_name' => 'style_table_text_color', 
			'type' => 'text', 
			'default' => '#000000',
			
		),
		array(
			'name' => 'ogone_page_table_background_color', 
			'short_name' => 'style_table_bg_color', 
			'type' => 'text', 
			'default' => '#FFFFFF',
		),
		array(
			'name' => 'ogone_page_button_color', 
			'short_name' => 'style_button_text_color', 
			'type' => 'text', 
			'default' => '#000000',
			
		),
		array(
			'name' => 'ogone_page_button_background_color' , 
			'short_name' => 'style_button_bg_color', 
			'type' => 'text', 
			'default' => '#FFFFFF',
			
		),

		array(
			'name' => 'ogone_font', 
			'short_name' => 'style_font_type', 
			'type' => 'select',
			'default' => 'Arial',
			'options'	=> array(
				'Arial'		=>  'Arial',
				'Arial Black'		=>  'Arial Black',
				'Arial Narrow'		=>  'Arial Narrow',
				'Charcoal'		=>  'Charcoal',
				'Comic Sans MS'		=>  'Comic Sans MS', // should this be where I draw the line?
				'Copperplate'		=>  'Copperplate',
				'Gill Sans'		=>  'Gill Sans',
				'Courier'		=>  'Courier',
				'Georgia'		=>  'Georgia',
				'Impact'		=>  'Impact',
				'Monaco'		=>  'Monaco',
				'Lucida Grande'		=>  'Lucida Grande',
				'Palatino'		=>  'Palatino',
				'Tahoma'		=>  'Tahoma',
				'Times'		=>  'Times',
				'Trebuchet MS'		=>  'Trebuchet MS',
				'Verdana'		=>  'Verdana',
				), 
		),
		array(
			'name' => 'ogone_left_column_text_color', 
			'short_name' => 'style_left_column_text_color', 
			'type' => 'text', 
			'default' => '#000000',
			
		),
		array(
			'name' => 'ogone_left_column_background_color', 
			'short_name' => 'style_left_column_bg_color', 
			'type' => 'text', 
			'default' => '#FFFFFF',
		),

		array(
			'name' => 'ogone_left_column_font', 
			'short_name' => 'style_left_column_font', 
			'type' => 'select',
			'default' => 'Arial',
			'options'	=> array(
				'Arial'		=>  'Arial',
				'Arial Black'		=>  'Arial Black',
				'Arial Narrow'		=>  'Arial Narrow',
				'Charcoal'		=>  'Charcoal',
				'Comic Sans MS'		=>  'Comic Sans MS',  
				'Copperplate'		=>  'Copperplate',
				'Gill Sans'		=>  'Gill Sans',
				'Courier'		=>  'Courier',
				'Georgia'		=>  'Georgia',
				'Impact'		=>  'Impact',
				'Monaco'		=>  'Monaco',
				'Lucida Grande'		=>  'Lucida Grande',
				'Palatino'		=>  'Palatino',
				'Tahoma'		=>  'Tahoma',
				'Times'		=>  'Times',
				'Trebuchet MS'		=>  'Trebuchet MS',
				'Verdana'		=>  'Verdana',
				),
		),
		array(
			'name' => 'ogone_logo_url',
			'note'	=> 'ogone_logo_url_note',
			'short_name' => 'style_logo', 
			'type' => 'text', 
		),
		/*
		array(
			'name' => 'Response_scripts folder location (If response_scripts folder is not in root of EE install, add full URL to its location, With Trailing Slash)', 
			'short_name' => 'response_script_location', 
			'type' => 'text',
			'default' => ''
		),
		*/
	);
	
	public $required_fields = array(
 
	);
	
	public $fields = array(
		'first_name'           ,
		'last_name'            ,
		'address'              ,
		'address2'             ,
		'city'                 ,
 		'zip'                  ,
		'country_code'         ,
		'shipping_first_name'  ,
		'shipping_last_name'   ,
		'shipping_address'     ,
		'shipping_address2'    ,
		'shipping_city'        ,
 		'shipping_zip'         ,
		'shipping_country_code',
		'phone'                ,
		'email_address'        ,
		);
	
	public $hidden = array('currency_code'); 
 
	public function initialize()
	{
		switch ($this->plugin_settings('mode'))
		{
			case "test": 
				$this->_host = "https://secure.ogone.com/ncol/test/orderstandard.asp"; 
				$this->_pspid = $this->plugin_settings('pspid_test');
				break; 
			default: 
				$this->_host = "https://secure.ogone.com/ncol/prod/orderstandard.asp"; 
				$this->_pspid = $this->plugin_settings('pspid_live');
		}
	}
	/**
	 * process_payment
	 *
 	 * @param string $credit_card_number 
	 * @return mixed | array | bool An array of error / success messages  is returned, or FALSE if all fails.
	 * @author Chris Newton
	 * @access public
	 * @since 1.0.0
	 */
	public function process_payment($credit_card_number)
	{
		$total = round($this->order('total') * 100); 
		$order_id = $this->order('order_id'); 
		$gateway = ucfirst(get_class($this)); 
		
		
		$post_array = array(
				'PSPID'					=> $this->_pspid,
				'ORDERID'				=> $order_id,
				'AMOUNT'				=> $total,
				'CURRENCY'				=> "EUR",// ($this->order('currency_code') ? $this->order('currency_code'): "EUR"), // ISO 3
				'LANGUAGE'				=>  ($this->order('language') ? $this->order('language'): "en_US"),
				'CN'					=> $this->order('first_name')." " .$this->order('last_name'),
				'EMAIL'					=> $this->order('email_address'),
				'OWNERZIP'				=> $this->order('zip'),
				'OWNERADDRESS'			=> $this->order('address')." ".$this->order('address2'),
				'OWNERCTY'				=> $this->order('country_code'),
				'OWNERTOWN'				=> $this->order('city'),
				'OWNERTELNO'			=> $this->order('phone'),
				'COM'			    	=> $this->order('description'), // order description
				'TITLE'			    	=> $this->plugin_settings('style_title'),
				'BGCOLOR'		    	=> $this->plugin_settings('style_bgcolor'),
				'TXTCOLOR'		    	=> $this->plugin_settings('style_text_color'),
				'TBLBGCOLOR'	    	=> $this->plugin_settings('style_table_bg_color'),
				'TBLTXTCOLOR'	    	=> $this->plugin_settings('style_table_text_color'),
				'BUTTONBGCOLOR'	    	=> $this->plugin_settings('style_button_bg_color'),
				'BUTTONTXTCOLOR'    	=> $this->plugin_settings('style_button_text_color'),
				'LOGO'			    	=> $this->plugin_settings('style_logo'),
				'FONTTYPE'		    	=> $this->plugin_settings('style_font_type'),
				'HDTBLBGCOLOR'	    	=> $this->plugin_settings('style_left_column_bg_color'), 
				'HDTBLTXTCOLOR'	    	=> $this->plugin_settings('style_left_column_text_color'),
				'HDFONTTYPE'	    	=> $this->plugin_settings('style_left_column_font'), 
				'HOMEURL'		    	=> 'NONE',// setting this one to none by default
				'COMPLUS'		    	=> $this->order('entry_id'). "_".time(), // used to get order data back out of the system
				//'PARAMPLUS'	    		=> '',// query string of stuff
				//'PARAMVAR'	    		=> '',
				'ACCEPTURL'		    	=> $this->response_script($gateway, array("accept")), 
				'DECLINEURL'	    	=> $this->response_script($gateway, array("decline")),
				'EXCEPTIONURL'	    	=> $this->response_script($gateway, array("exception")),
				'CANCELURL'		    	=> $this->response_script($gateway, array("cancel")),
				'BACKURL'		    	=> $this->response_script($gateway, array("backurl")),// used when you only allow a customer to select specific brands
				'OPERATION'		    	=> 'SAL', // yes... it really is SAL, not SALE.
				//'ALIAS'		    		=> '',
				//'ALIASUSAGE'	    	=> '',
				//'ALIASOPERATION'  	=> '',
				//'USERID'		    	=> '', // For call center users, not web users
				//'TP'			    	=> '',// dynamic template (used for subscriptions or iPhone stuff)
				//'PM'			    	=> '', // Payment Method CreditCard
				//'BRAND'		    		=> '', // Brand VISA
				//'WIN3DS'		    	=> '', MAINW, or POPUP where the 3-D should be shown
				//'PMLIST'		    	=> '',// ; delimited list of payment methods
				//'PMLISTTYPE'	    	=> '',// 0,1,2 display of payment methods
				//'CATALOGURL'	    	=> '', // catalog url
			);
		
		// SHA GENERATION //////////////////////////////
		// test sha here: https://secure.ogone.com/ncol/test/testsha.asp
		// the array must be sorted alphabetically 
		uksort($post_array, "strnatcasecmp");
		$string_to_hash = "";
 		foreach ($post_array as $key=>$value)
		{
			if ($value)
			{
 				$revised_post_array[$key] = $value; 
				$string_to_hash.=strtoupper($key)."=".$value.$this->plugin_settings('passphrase');
			}

		}
 		
		$sha1_hash = strtoupper(sha1($string_to_hash)); 
		// END SHA GENERATION ////////////////////////////////
		
		$revised_post_array['SHASIGN'] = $sha1_hash;
 
		$this->gateway_exit_offsite($revised_post_array, $this->_host); 
		exit;
	}
	// END

	function extload($post = array())
	{
		$auth  = array(
			'authorized' 	=> FALSE,
			'error_message'	=> NULL,
			'failed'		=> TRUE,
			'processing' 	=> FALSE,
			'declined'		=> FALSE,
			'transaction_id'=> NULL 
			);

		$order_id = $this->xss_clean($this->arr($post, "orderID")); 
		$status = $this->xss_clean($this->arr($post, "STATUS")); 
 		$xss_clean = TRUE; 
		
		if (! $order_id )
		{
			die($this->lang('ogone_order_id_not_specified')); 
		}
		if (! $status )
		{
			if ($this->arr($post, "ct_action"))
			{
				$status =$post['ct_action']; 
			}
			else
			{
				die($this->lang('ogone_status_not_specified')); 
			}
		}
		// relaunching full cart so that session is active and template content can be displayed. 
		$this->relaunch_cart($cart_id = NULL, $order_id);
 
		// if it's not set, we'll use the manually set status in the function parameters.
		if ($this->input_post('STATUS', $xss_clean))
		{
			$SHASIGN = $this->input_post('SHASIGN', $xss_clean); 

			// removing items that are not concatenated for SHA comparison
			unset($post['ct_gateway']); 
			unset($post['ct_action']); 
			unset($post['ct_option']); 
			
			uksort($post, "strnatcasecmp");

			$out_data = "";

			foreach ($post as $key=>$value)
			{
				if ($key == "SHASIGN")
				{
					continue; 
				}
				// unset the blank keys. they're not in the sha
				if ($value!="")
				{
					$out_data .= strtoupper($key) ."=".$value.$this->plugin_settings('out_passphrase');
				}
			}
			$out_sha = strtoupper(sha1($out_data));
			
			if ($SHASIGN != $out_sha)
			{
 				$auth = array(
					'authorized' 	=> FALSE,
					'error_message'	=>  $this->lang('ogone_non_matching_sha'),
					'failed'		=> TRUE,
					'declined'		=> FALSE,
					'transaction_id'=> NULL 
					);

				$this->gateway_order_update($auth, $order_id,$this->order('return'));
				exit;
			}
		}
		switch ($status)
		{
			case '0':
				$auth = array(
					'authorized' 	=> FALSE,
					'error_message'	=>  $this->lang('ogone_unknown_error')." ". $status,
					'failed'		=> TRUE,
					'declined'		=> FALSE,
					'transaction_id'=> NULL 
				);
				break;
			case '5':	
			case '9':	
			case "accept":
				$auth = array(
					'authorized' 	=> TRUE,
					'error_message'	=> NULL,
					'failed'		=> FALSE,
					'declined'		=> FALSE,
					'transaction_id'=> $this->xss_clean($this->arr($post, "PAYID")),
					);
				break;
			case '6':
				$auth = array(
					'authorized' 	=> FALSE,
					'error_message'	=>  $this->lang('ogone_authorized_and_canceled'),
					'failed'		=> TRUE,
					'declined'		=> FALSE,
					'transaction_id'=> NULL
					);
				break;

			case '1':	 
			case "cancel":
				$auth = array(
					'authorized' 	=> FALSE,
					'error_message'	=>  $this->lang('ogone_purchase_canceled'),
					'failed'		=> TRUE,
					'declined'		=> FALSE,
					'transaction_id'=> NULL
					);
				break;
			case '2':	 
			case "decline":
				$auth = array(
					'authorized' 	=> FALSE,
					'error_message'	=>  $this->lang('ogone_payment_declined'),
					'failed'		=> FALSE,
					'declined'		=> TRUE,
					'transaction_id'=> NULL 
					);
				break;
			// yes, I suppose you could add more data to the error response here. if you think it's necessary, please let me know'
			case "exception":
			case "backurl": 
			default: 
				$auth = array(
					'authorized' 	=> FALSE,
					'error_message'	=> $this->lang('ogone_unknown_error')." ". $status,
					'failed'		=> TRUE,
					'declined'		=> FALSE,
					'transaction_id'=> NULL 
					);
		}

		// added TRUE to this due to someone's system not sending emails unless this was explicitly set. 
		$this->gateway_order_update($auth, $order_id, $this->order('return'), TRUE);
	 	exit; 

	} // END
	
	function arr($array, $key)
	{
		if (isset($array[$key]))
		{
			return $array[$key]; 
		}
		else
		{
			return NULL; 
		}
	}
}
// END Class