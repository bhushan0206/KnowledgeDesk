<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Front Controller
 *
 * This class provides a common place to handle any tasks that need to
 * be done for all public-facing controllers.
 *
 * @package    Bonfire\Core\Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Front_Controller extends Base_Controller
{
    protected $pager;
    protected $limit;

    //--------------------------------------------------------------------

    /**
     * Class constructor
     *
     */
    public function __construct()
    {
         $this->autoload['libraries'][] = 'ui/contexts';

         parent::__construct();

        // Pagination config
        $this->pager = array(
            'full_tag_open'     => '<div class="pagination pagination-right"><ul>',
            'full_tag_close'    => '</ul></div>',
            'next_link'         => '&rarr;',
            'prev_link'         => '&larr;',
            'next_tag_open'     => '<li>',
            'next_tag_close'    => '</li>',
            'prev_tag_open'     => '<li>',
            'prev_tag_close'    => '</li>',
            'first_tag_open'    => '<li>',
            'first_tag_close'   => '</li>',
            'last_tag_open'     => '<li>',
            'last_tag_close'    => '</li>',
            'cur_tag_open'      => '<li class="active"><a href="#">',
            'cur_tag_close'     => '</a></li>',
            'num_tag_open'      => '<li>',
            'num_tag_close'     => '</li>',
        );
        $this->limit = $this->settings_lib->item('site.list_limit');

/*        // load the keyboard shortcut keys
        $shortcut_data = array(
            'shortcuts' => config_item('ui.current_shortcuts'),
            'shortcut_keys' => $this->settings_lib->find_all_by('module', 'core.ui'),
        );
        Template::set('shortcut_data', $shortcut_data);*/

        Events::trigger('before_front_controller');

        $this->load->library('template');
        $this->load->library('assets');

        $this->set_current_user();

        Events::trigger('after_front_controller');

        // Basic setup        
        Template::set_theme($this->config->item('template.default_theme'));            
    }//end __construct()

    //--------------------------------------------------------------------

}

/* End of file Front_Controller.php */
/* Location: ./application/core/Front_Controller.php */