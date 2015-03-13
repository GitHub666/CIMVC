<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('welcome_model');
    }

	public function index(){
		//$this->load->helper(array('form'));
		//$this->load->view('login');

		$data['title'] = 'Acceso Administrador';
		$data['main_content'] = 'login';
		$this->load->view('plantillas/main_template_login', $data);
	}

		public function principal(){
		login_site();
		$data['title'] = 'Dashboard Administrador';
		$data['main_content'] = 'principal';
		$this->load->view('plantillas/main_template', $data);
	}

	public function registrarAlumno(){
		login_site();
		$data['arrAreas'] = $this->welcome_model->get_areas();
		$data['title'] = 'Registrar Alumno';
		$data['main_content'] = 'registraAl';
		$this->load->view('plantillas/main_template', $data);
	}

	public function insertarA(){
		login_site();
		$persona = array(
			'al_rt'=>$this->input->post('al_rt'),
			'al_dv'=>$this->input->post('al_dv'),
			'al_nom'=>$this->input->post('al_nom'),
			'al_lastn'=>$this->input->post('al_lastn'),
			'areas_area_id'=>$this->input->post('selAreas')
			);

		if ($this->welcome_model->insertar_alumno($persona)){
		redirect('/welcome/registrarAlumno');
		}
	}

	public function eliminarAlumno(){
		login_site();
		$data['arrAlumno'] = $this->welcome_model->get_alumno();
		$data['title'] = 'Eliminar Alumno';
		$data['main_content'] = 'eliminaAl';
		$this->load->view('plantillas/main_template', $data);
	}

	public function registrarDocente(){
		login_site();
		$data['arrAreas'] = $this->welcome_model->get_areas();
		$data['title'] = 'Registrar Docente';
		$data['main_content'] = 'registraDoc';
		$this->load->view('plantillas/main_template', $data);
	}

	public function insertarD(){
		login_site();
		$persona = array(
			'doc_rt'=>$this->input->post('doc_rt'),
			'doc_dv'=>$this->input->post('doc_dv'),
			'doc_nom'=>$this->input->post('doc_nom'),
			'doc_lastn'=>$this->input->post('doc_lastn'),
			'areas_area_id'=>$this->input->post('selAreas')
			);

		if ($this->welcome_model->insertar_docente($persona)){
		redirect('/welcome/registrarDocente');
		}
	}

	public function eliminarDocente(){
		login_site();
		$data['arrDocente'] = $this->welcome_model->get_doc();
		$data['title'] = 'Eliminar Docente';
		$data['main_content'] = 'eliminaDoc';
		$this->load->view('plantillas/main_template', $data);
	}

	public function crearRamo(){
		login_site();
		$data['arrDoc'] = $this->welcome_model->get_docente();
		$data['arrAreas'] = $this->welcome_model->get_areas();
		$data['title'] = 'Crear Ramo';
		$data['main_content'] = 'crearRamo';
		$this->load->view('plantillas/main_template', $data);
	}

	public function insertaR(){
		login_site();
		$ramo = array(
			//'ram_area_id'=>$this->input->post('ram_area_id'),
			'ramo_nom'=>$this->input->post('ramo_nom'),
			'ramo_year'=>$this->input->post('ramo_year'),
			'ramo_cupo'=>$this->input->post('ramo_cupo'),
			'areas_area_id'=>$this->input->post('selAreas'),
			'usu_doc_doc_id'=>$this->input->post('selDoc')
			);

		if ($this->welcome_model->insertar_ramo($ramo)){
		redirect('/welcome/crearRamo');
		}
	}

	public function eliminarAl(){
		login_site();
		$id = $this->uri->segment(3);
		$delete = $this->welcome_model->eliminarAlu($id);
			redirect('/welcome/eliminarAlumno');
	}

	public function eliminarDoc(){
		login_site();
		$id = $this->uri->segment(3);
		$delete = $this->welcome_model->eliminarDoce($id);
			redirect('/welcome/eliminarDocente');
	}
	//Funciones Login

    public function validate(){
            $username = $this->input->post('log_rt');
            $password = $this->input->post('log_pass');
            if($user = $this->welcome_model->validate_credentials($username, $password)){
                    $session = array(
                            'name' => $user->name,
                            'log_rt' => $username,
                            'is_logged_in' => TRUE,
                            );
                    $this->session->set_userdata($session);
                    redirect(base_url('index.php/welcome/principal'));
            }
            else{
                    //$this->load->view('main_template_login', array('error'=>TRUE));
                    redirect(base_url(), array('error'=>TRUE));
            }
    }

    public function logout(){
    	login_site();
            if($this->session->userdata('is_logged_in'))
                    $this->session->sess_destroy();
            redirect(base_url());
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
