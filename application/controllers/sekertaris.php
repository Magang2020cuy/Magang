<?php
class sekertaris extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_kehadiran');
        $this->load->model('model_pegawai');
        $this->load->model('model_produk');
        $this->load->model('Model_cashflow');
        $this->load->model('login_model');
        $this->load->library('form_validation');
	}

	public function index(){
        // $where=array('id' => $this->session->userdata('id'));
        // $id = $this->login_model->view_where('user',$where)->result();
        // $this->session->set_userdata('user', $id);
        // redirect('sekertaris/show/'.$this->session->user);
        $data['pegawai'] = $this->model_pegawai->tampil_pegawai2();
        $data['saldo'] = $this->Model_cashflow->getTotal()->result();
        $data['stok'] = $this->model_produk->tampil_stok2();
		$this->load->view('dashboard',$data);
    }
    public function show(){
        
    }

    public function kehadiran(){
        $data['pegawai'] = $this->model_kehadiran->pegawai();
        $this->load->view('v_kehadiran',$data);
    }

    public function simpan_kehadiran(){
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan','<font color=red>Form Tidak Boleh Kosong</font>');
            $this->load->view('v_kehadiran');
            
        }
        else{
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');
        $jam_kerja = $this->input->post('jam_kerja');

        $data   = array('id_pegawai' => $id_pegawai,
                    'jam_datang' => $jam_datang,
                    'tanggal' => $tanggal,
                    'jam_pulang' => 0,
                    'jam_kerja' => 80000
                    );

        $this->model_kehadiran->insert($data,"kehadiran");
        redirect('sekertaris/daftarKehadiran');
        }
    }

    public function daftarKehadiran(){
        $data['data'] = $this->model_kehadiran->tampil();
        $this->load->view('v_daftarkehadiran',$data);
    }

    public function editKehadiran($id_kehadiran){
        //$where = array('id_pegawai' => $id_pegawai);
        $data['pegawai'] = $this->model_kehadiran->pegawai();
        $data['data'] = $this->model_kehadiran->get($id_kehadiran);
        $this->load->view('v_edit_kehadiran',$data);
    }

    public function update_kehadiran(){
        $id_kehadiran = $this->input->post('id_kehadiran');
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal = $this->input->post('tanggal');
        $jam_datang = $this->input->post('jam_datang');
        $jam_pulang = $this->input->post('jam_pulang');
 
        $data = array(
            'id_pegawai' => $id_pegawai,
            'tanggal' => $tanggal,
            'jam_datang' => $jam_datang,
            'jam_pulang' => $jam_pulang
        );
        $this->model_kehadiran->update_kehadiran($data,$id_kehadiran);
        redirect('sekertaris/daftarKehadiran');
    }

    public function hapus_kehadiran($id_kehadiran){
        $where = array('id_kehadiran' => $id_kehadiran);
        $this->model_kehadiran->hapus_kehadiran($where,'kehadiran');
        redirect('sekertaris/daftarKehadiran');
    }

    //Bulan
    public function v_januari(){
        $data['data'] = $this->model_kehadiran->get_januari()->result();
        $this->load->view('v_daftarkehadiran',$data);
    }

    public function v_februari(){
        $data['data'] = $this->model_kehadiran->get_februari()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_maret(){
        $data['data'] = $this->model_kehadiran->get_maret()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_april(){
        $data['data'] = $this->model_kehadiran->get_april()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_mei(){
        $data['data'] = $this->model_kehadiran->get_mei()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_juni(){
        $data['data'] = $this->model_kehadiran->get_juni()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_juli(){
        $data['data'] = $this->model_kehadiran->get_juli()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_agustus(){
        $data['data'] = $this->model_kehadiran->get_agustus()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_september(){
        $data['data'] = $this->model_kehadiran->get_september()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_oktober(){
        $data['data'] = $this->model_kehadiran->get_oktober()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_november(){
        $data['data'] = $this->model_kehadiran->get_november()->result();
        $this->load->view('v_daftarkehadiran',$data);
    } 

    public function v_desember(){
        $data['data'] = $this->model_kehadiran->get_desember()->result();
        $this->load->view('v_daftarkehadiran',$data);
    }
}