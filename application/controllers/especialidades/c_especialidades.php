<?php

class c_especialidades extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("especialidades_model");
    }


    public function index()
    {
        $especialidades = $this->especialidades_model->get();
        $data = array(
            'especialidades' => $especialidades
        );
        $this->load->view("especialidades/especialidades_view", $data);
    }

    public function mostrarDatos()
    {
        header("Content-type: application/json");
        $especialidades = $this->especialidades_model->get();
        $data2 = array();
        $data['response'] = 'success';
        foreach($especialidades as $especialidad)
        {
            array_push($data2,array(
                'id' => $especialidad->id,
                'nombre' => $especialidad->nombre
            ));
        }
        $data['especialidades'] = $data2;
        print json_encode($data);
    }

}


?>