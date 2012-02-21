<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// ------------------------------------------------------------------------

/**
 * Rank Drop-down Menu
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	string
 * @return	string
 */
 
	function form_dropdown_rank($name = '', $selected = array(), $extra = '')
	{
		/* load the user agent library */
		$ci =& get_instance();
		
		/* load the resources */
		$ci->load->model('ranks_model', 'ranks');
		$ci->load->library('session');
		
		/* set and load the language file needed */
		$ci->lang->load('app', $ci->session->userdata('language'));
		
		/* grab the ranks */
		$ranks = $ci->ranks->get_ranks();
		
		if ( ! is_array($selected))
		{
			$selected = array($selected);
		}

		// If no selected state was submitted we will attempt to set it automatically
		if (count($selected) === 0)
		{
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST[$name]))
			{
				$selected = array($_POST[$name]);
			}
		}

		if ($extra != '') $extra = ' '.$extra;

		$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';

		$form = '<select name="'.$name.'"'.$extra.$multiple.">\n";
	
		if ($ranks->num_rows() > 0)
		{
			foreach ($ranks->result() as $rank)
			{
				$key = (string) $rank->rank_id;
	
				$sel = (in_array($rank->rank_id, $selected)) ? ' selected="selected"' : '';
	
				/*** MOD STYLIZED SELECTLIST ***/
				/*******************************/
				$mod_class = 'modsel_'.substr($rank->rank_image,0,1);
				
				$form .= '<option value="'.$rank->rank_id.'"'.$sel.' class="'.$mod_class.'">'.(string) $rank->rank_name."</option>\n";
				/*** MOD STYLIZED SELECTLIST ***/
				/*******************************/
			}
		}

		$form .= '</select>';

		return $form;
	}

require_once MODPATH.'core/helpers/Nova_form_helper.php';
