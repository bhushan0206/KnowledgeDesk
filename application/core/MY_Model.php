<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * MY_Model extends BF_Model for backwards compatibility, and to provide a
 * placeholder class that your project can customize/extend as needed.
 *
 * @package    Bonfire\Core\MY_Model
 * @author     Lonnie Ezell
 * @link       http://cibonfire.com/docs/developer/bonfire_models
 */
class MY_Model extends BF_Model
{
  /** relationships variables */
    private $_relationships = array();
    public $has_one = array();
    public $has_many = array();
    public $has_many_pivot = array();
    public $separate_subqueries = TRUE;
    private $_requested = array();
    /** end relationships variables */

    /*caching*/
    public $cache_driver = 'file';
    public $cache_prefix = 'mm';
    protected $_cache = array();
    /*pagination*/
    public $next_page;
    public $previous_page;
    public $all_pages;
    public $pagination_delimiters;
    public $pagination_arrows;
    /* validation */
    private $validated = TRUE;
    private $row_fields_to_update = array();

    protected $callback_parameters = array();
    protected $return_as = 'object';
    protected $return_as_dropdown = NULL;
    protected $_dropdown_field = '';
    private $_trashed = 'without';
    private $_select = '*';        

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('inflector');                
        $this->pagination_delimiters = (isset($this->pagination_delimiters)) ? $this->pagination_delimiters : array('<span>','</span>');
        $this->pagination_arrows = (isset($this->pagination_arrows)) ? $this->pagination_arrows : array('&lt;','&gt;');
    }
  
    /**
     * private function _has_one($request)
     *
     * returns a joining of two tables depending on the $request relationship established in the constructor
     * @param $request
     * @return $this
     */
    /*private function _has_one($request)
    {
        $relation = $this->_relationships[$request];
        $this->db->join($relation['foreign_table'], $relation['foreign_table'].'.'.$relation['foreign_key'].' = '.$this->table.'.'.$relation['local_key'], 'left');
        return TRUE;
    }  */

}
/* End of file ./application/core/MY_Model.php */