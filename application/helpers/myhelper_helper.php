<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * My Helpers
 *
 * Customised my helpers.
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		BBTFR
 * @link		http://codeigniter.com/user_guide/helpers/directory_helper.html
 */

// --------------------------------------------------------------------

/**
* resource_url()
*
* Returns the "resource_url" item from your config file
*
* @access	public
* @param	string
* @return	str
*/
if ( ! function_exists('resource_url')) {
	function resource_url($uri = '') {	
		$CI =& get_instance();
		return $CI->config->slash_item('base_url') . 'resource/' . $uri;
	}
}

// --------------------------------------------------------------------

/**
* resource_url()
*
* Returns the "resource_url" item from your config file
*
* @access	public
* @param	string
* @return	str
*/
if ( ! function_exists('menu')) {
	function menu($list, $depth = 0, $tabspace = 4) {
		// If an array wasn't submitted there's nothing to do...
		if ( ! is_array($list)) {
			return $list;
		}
		
		$out = "\n";
		// Set the indentation based on the depth
		$out .= str_repeat(" ", $depth * $tabspace);
		
		// Write the opening list tag
		$out .= "<ul>\n";
		
		// Cycle through the list elements.  If an array is
		// encountered we will recursively call _list()
		
		foreach ($list as $key => $val)
		{
			
			$out .= str_repeat(" ", ($depth + 1) * $tabspace);
			$out .= "<li>";
			
			if ( ! is_array($val))
			{
				$out .= "<a href='$val' class='menulink'>$key</a>" ;
			}
			else
			{
				$out .= "<a href='###'>$key  »</a>";
				$out .= menu($val, $depth + 2);
				$out .= str_repeat(" ", ($depth + 1) * $tabspace);
			}
			
			$out .= "</li>\n";
			$out .= str_repeat(" ", ($depth + 1) * $tabspace);
			$out .= "<li class='break'></li>\n";
		}
		
		// Set the indentation for the closing tag
		$out .= str_repeat(" ", $depth * $tabspace);
		
		// Write the closing list tag
		$out .= "</ul>\n";
		
		return $out;
	}
}

/* End of file myurl_helper.php */
/* Location: ./application/helpers/imyurl_helper.php */