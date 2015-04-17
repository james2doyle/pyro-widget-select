<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Folder Select Field Type
 *
 * @package		Addons\Field Types
 * @author		James Doyle (james2doyle)
 * @license		MIT License
 * @link		http://github.com/james2doyle/pyro-widget-select
 */
class Field_widget_select
{
	public $field_type_slug    = 'widget_select';
	public $db_col_type        = 'int';
	public $version            = '1.0.0';
	public $author             = array('name'=>'James Doyle', 'url'=>'http://github.com/james2doyle/pyro-widget-select');

	// --------------------------------------------------------------------------

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('widgets/widget_m');
	}

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function form_output($data, $entry_id, $field)
	{
		$instances = $this->CI->db->select('id, title')->get('widget_instances')->result();
		$values = array_for_select($instances, 'id', 'title');
		$dropdown = form_dropdown($data['form_slug'], array('-1' => 'None') + $values, $data['value']);
		return sprintf("<div id=\"%s_widget_select\" class=\"widget_select\">%s</div>", $data['form_slug'], $dropdown);
	}

	public function pre_output_plugin($value, $data)
	{
		$widget = $this->CI->widget_m->get($value);
		if ($widget) {
			return $value;
		} else {
			return false;
		}
	}

	public function event($field)
	{
		// add js and css folders if you need this
		// $this->CI->type->add_js('widget_select', 'widget_select.js');
		// $this->CI->type->add_css('widget_select', 'widget_select.css');
	}
}
