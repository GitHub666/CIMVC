    <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if ( ! function_exists('login_site')){
            function login_site(){ 
                    $CI =& get_instance();         
                    if(!$CI->session->userdata('is_logged_in'))
                            redirect(base_url().'index.php/welcome/index');
            }
    }

