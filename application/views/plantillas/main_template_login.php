<?php
	$data['title'] =$title;
	$this->load->view('plantillas/header', $data);
	$this->load->view($main_content);
	$this->load->view('plantillas/footer');
