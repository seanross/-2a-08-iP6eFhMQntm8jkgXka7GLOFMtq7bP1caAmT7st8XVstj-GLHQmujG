<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Loader Class
 *
 * @author Drew Harvey (http://www.daharveyjr.com/)
 * 
 * This class extends the CI_Loader class, and adds tiles functionality.
 */
class MY_Loader extends CI_Loader {

	protected $_tilesets = array();

	function __construct() {
		parent::__construct();
		$this->_tilesets = array(
			'base' => array(
				'base' => 'tiles/base/base',
				'header' => 'tiles/base/header',
				'navigation' => 'tiles/base/navigation',
				'footer' => 'tiles/base/footer',
				 'sidebar' => 'tiles/base/sidebar'
			),
                        'base_w_sidebar' => array(
				'base' => 'tiles/base_w_sidebar/base',
				'header' => 'tiles/base/header',
				'navigation' => 'tiles/base/navigation',
				'footer' => 'tiles/base/footer',
				 'sidebar' => 'tiles/base/sidebar'
			),
			'member' => array(
				'base' => 'tiles/member/base',
				'header' => 'tiles/member/header',
				'navigation' => 'tiles/member/navigation',
				'footer' => 'tiles/member/footer',
				 'sidebar' => 'tiles/base/sidebar'
			),
			'mis' => array(
				'base' => 'tiles/mis/base',
				'header' => 'tiles/mis/header',
				'navigation' => 'tiles/mis/navigation',
				'footer' => 'tiles/mis/footer',
				 'sidebar' => 'tiles/base/sidebar'
			)
		);
	}

	/**
	 * Load Tile
	 *
	 * This function is used to load a "tile" file.  It has three parameters:
	 *
	 * 1. The name of the "tile" file to be included.
	 * 2. An associative array of data to be extracted for use in the tile.
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function tile($tileset = 'base', $view, $vars = array(), $return_flag = false) {

		$data = array();

		// Get CI instance
		$CI =& get_instance();
		$vars['error_string'] = validation_errors();
		$vars['flash_message'] = $CI->session->flashdata('flash_message');
		unset($CI);
		
		// Meta Checks
		$vars['meta_keywords'] = (!empty($vars['meta_keywords'])) ? $vars['meta_keywords'] : '';
		$vars['meta_description'] = (!empty($vars['meta_description'])) ? $vars['meta_description'] : '';
		$vars['meta_author'] = (!empty($vars['meta_author'])) ? $vars['meta_author'] : 'Sean Ross Fortunato';
		
		// Create Response & Tile
		if (!isset($vars['title'])) {
			$data['title'] = "VRE - Online Printing Press";
		} else {
			$data['title'] = $vars['title'];
		}

		if (!isset($vars['navigation'])) {
			$vars['navigation'] = $this->view($this->_tilesets[$tileset]['navigation'], $vars, true);
		} else {
			$vars['navigation'] = $this->view($vars['navigation'], $vars, true);
		}

		if (!isset($vars['header'])) {
			$vars['header'] = $this->view($this->_tilesets[$tileset]['header'], $vars, true);
		} else {
			$data['header'] = $this->view($vars['header'], $vars, true);
		}

		if (!isset($vars['footer'])) {
			$data['footer'] = $this->view($this->_tilesets[$tileset]['footer'], $vars, true);
		} else {
			$data['footer'] = $this->view($vars['footer'], $vars, true);
		}

		 if (!isset($vars['sidebar'])) {
		 	$vars['sidebar'] = $this->view($this->_tilesets[$tileset]['sidebar'], $vars, true);
		 } else {
		 	$data['sidebar'] = $this->view($vars['sidebar'], $vars, true);
		 }
		
		$data['content'] = $this->view($view, $vars, true);

		return $this->view($this->_tilesets[$tileset]['base'], $data, $return_flag);

	}

}

/* End of file MY_Loader.php */