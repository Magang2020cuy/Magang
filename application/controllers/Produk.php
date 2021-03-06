<?php
class Produk extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
        $this->load->model('model_produk');
        $this->load->library('form_validation');
	}

	 public function produk(){
        $this->load->view('v_produk');
    }

    public function simpanProduk(){
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $ukuran = $this->input->post('ukuran');
        $kualitas = $this->input->post('kualitas');

        $data   = array('nama' => $nama,
                    'harga' => $harga,
                    'ukuran' => $ukuran,
                    'kualitas' => $kualitas,
                    );

        $this->model_produk->insert_produk($data,"produk");
        redirect('Produk/daftarProduk');
    }
    public function daftarProduk(){
        $data['produk'] = $this->model_produk->tampil_produk();
        $this->load->view('v_daftarProduk',$data);
    }

    public function editProduk($id_produk){
        $where = array('id_produk' => $id_produk);
        $data['produk'] = $this->model_produk->edit_produk($where,'produk')->result();
        $this->load->view('v_edit_produk',$data);
    }

     public function updateProduk(){
        $id_produk = $this->input->post('id_produk');
        $nama = $this->input->post('nama');
        $ukuran = $this->input->post('ukuran');
        $kualitas = $this->input->post('kualitas');
        $harga = $this->input->post('harga');
 
        $data = array(
        'nama' => $nama,
        'ukuran' => $ukuran,
        'kualitas' => $kualitas,
        'harga' => $harga
        );
 
        $where = array(
        'id_produk' => $id_produk
        ); 
        $this->model_produk->update_produk($where,$data,'produk');
        redirect('Produk/daftarProduk');
    }

    public function hapusProduk($id_produk){
        $where = array('id_produk' => $id_produk);
        $this->model_produk->hapus_produk($where,'produk');
        redirect('Produk/daftarProduk');
    }

//################################### PRODUKSI ################################

     public function produksi(){
        $data['produk'] = $this->model_produk->produk();
        $data['pegawai'] = $this->model_produk->pegawai();
        $this->load->view('v_produksi',$data);
    }

    public function simpanProduksi(){
        $id_produk = $this->input->post('id_produk');
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal_produksi = $this->input->post('tanggal_produksi');
        $jumlah = $this->input->post('jumlah');

        $data   = array('id_produk' => $id_produk,
                        'id_pegawai' => $id_pegawai,
                        'tanggal_produksi' => $tanggal_produksi,
                        'jumlah' => $jumlah,
                    );

        $this->model_produk->insert_produksi($data,"produksi");
        redirect('Produk/daftarProduksi');
    }
    public function daftarProduksi(){
        $data['produksi'] = $this->model_produk->tampil_produksi();
        $this->load->view('v_daftarProduksi',$data);
    }

    public function editProduksi($id_produksi){
        // $where = array('id_produksi' => $id_produksi);
        $data['pegawai'] = $this->model_produk->pegawai();
        $data['produk'] = $this->model_produk->produk();
        $data['produksi'] = $this->model_produk->get_produksi($id_produksi);
        $this->load->view('v_edit_produksi',$data);
    }

     public function updateProduksi(){
        $id_produksi = $this->input->post('id_produksi');
        $id_produk = $this->input->post('id_produk');
        $id_pegawai = $this->input->post('id_pegawai');
        $tanggal_produksi = $this->input->post('tanggal_produksi');
        $jumlah = $this->input->post('jumlah');

 
        $data = array(
            'id_produk' => $id_produk,
            'id_pegawai' => $id_pegawai,
            'tanggal_produksi' => $tanggal_produksi,
            'jumlah' => $jumlah
        );
 
        $this->model_produk->update($data,$id_produksi);
        redirect('Produk/daftarProduksi');
    }

    public function hapusProduksi($id_produksi){
        $where = array('id_produksi' => $id_produksi);
        $this->model_produk->hapus_produksi($where,'produksi');
        redirect('Produk/daftarProduksi');
    }

//################################### PENJUALAN ########################################

    public function penjualan(){
        $data['produk'] = $this->model_produk->produk();
        $data['pembeli'] = $this->model_produk->pembeli();
        $this->load->view('v_penjualan',$data);
    }

    public function simpanPenjualan(){
        $id_produk = $this->input->post('id_produk');
        $id_pembeli = $this->input->post('id_pembeli');
        $sales = $this->input->post('sales');
        $tanggal = $this->input->post('tanggal');
        $no_nota = $this->input->post('no_nota');
        $pcs = $this->input->post('pcs');
        $keterangan = $this->input->post('keterangan');

        $data   = array('id_produk' => $id_produk,
                        'id_pembeli' => $id_pembeli,
                        'sales' => $sales,
                        'tanggal' => $tanggal,
                        'no_nota' => $no_nota,
                        'pcs' => $pcs,
                        'keterangan' => $keterangan
                        
                    );
        $query = "SELECT pr.namat, pr.ukuran, pr.kualitas, SUM(pen.pcs) as pengeluaran, ( SELECT sum(prod.jumlah) from produksi prod JOIN pegawai pg ON (pg.id_pegawai = prod.id_pegawai) where prod.id_produk = pr.id_produk and pg.pekerjaan='Finishing' GROUP by prod.id_produk ) as pemasukan, (( SELECT sum(prod.jumlah) from produksi prod JOIN pegawai pg ON (pg.id_pegawai = prod.id_pegawai) where prod.id_produk = pr.id_produk and pg.pekerjaan='Finishing' GROUP by prod.id_produk)-SUM(pen.pcs)) as jumlah FROM produk pr JOIN penjualan pen ON pen.id_produk = pr.id_produk GROUP BY pr.id_produk";
        if ($query == False  ) {
            $data['produk'] = $this->model_produk->produk();
            $data['pembeli'] = $this->model_produk->pembeli();
            $this->load->view('v_penjualan',$data);
        }else{
            $this->model_produk->insert_penjualan($data,"penjualan");
            redirect('Produk/daftarPenjualan');
        }
    }

    public function daftarPenjualan(){
        $data['penjualan'] = $this->model_produk->tampil_penjualan();
        $this->load->view('v_daftarPenjualan',$data);
    }

    public function editPenjualan($id_penjualan){
        $data['produk'] = $this->model_produk->produk();
        $data['pembeli'] = $this->model_produk->pembeli();
        $data['penjualan'] = $this->model_produk->get_penjualan($id_penjualan);
        $this->load->view('v_edit_penjualan',$data);
    }

     public function updatePenjualan(){
        $id_penjualan = $this->input->post('id_penjualan');
        $id_produk = $this->input->post('id_produk');
        $id_pembeli = $this->input->post('id_pembeli');
        $sales = $this->input->post('sales');
        $tanggal = $this->input->post('tanggal');
        $no_nota = $this->input->post('no_nota');
        $pcs = $this->input->post('pcs');
        $keterangan = $this->input->post('keterangan');

 
        $data = array(
            'id_pembeli' => $id_pembeli,
            'id_produk' => $id_produk,
            'sales' => $sales,
            'tanggal' => $tanggal,
            'no_nota' => $no_nota,
            'pcs' => $pcs,
            'keterangan' => $keterangan
        );
 
        $this->model_produk->update_penjualan($data,$id_penjualan);
        redirect('Produk/daftarPenjualan');
    }

    public function hapusPenjualan($id_penjualan){
        $where = array('id_penjualan' => $id_penjualan);
        $this->model_produk->hapus_penjualan($where,'penjualan');
        redirect('Produk/daftarPenjualan');
    }


//==================================== STOK GUDANG ===================================

    public function stokGudang(){
        $data['stok'] = $this->model_produk->tampil_stok();
        $this->load->view('v_stokGudang',$data);
    }
    
    public function rincianGudang(){
        $data['rincian'] = $this->model_produk->rincian_gudang();
        $this->load->view('v_rincianGudang',$data);
    }
    public function rincianGudang2(){
        $data['rincian2'] = $this->model_produk->tampil_penjualan();
        $this->load->view('v_rincianGudang2',$data);
    }

}
?>