<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Produk_model');
    }

    public function index()
    { 
        $kategori = $this->Produk_model->get_kategori();
        $data = [];
        $total = $this->Produk_model->getTotal();

        if ($total > 0) {
            $limit = 2;
            $start = $this->uri->segment(3, 0);

            $config = [
                'base_url' => base_url() . 'produk/index',
                'total_rows' => $total,
                'per_page' => $limit,
                'uri_segment' => 3,

                // Bootstrap 3 Pagination
                'first_link' => '&laquo;',
                'last_link' => '&raquo;',
                'next_link' => 'Next',
                'prev_link' => 'Prev',
                'full_tag_open' => '<ul class="pagination">',
                'full_tag_close' => '</ul>',
                'num_tag_open' => '<li>',
                'num_tag_close' => '</li>',
                'cur_tag_open' => '<li class="active"><span>',
                'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
                'next_tag_open' => '<li>',
                'next_tag_close' => '</li>',
                'prev_tag_open' => '<li>',
                'prev_tag_close' => '</li>',
                'first_tag_open' => '<li>',
                'first_tag_close' => '</li>',
                'last_tag_open' => '<li>',
                'last_tag_close' => '</li>',
            ];
            $this->pagination->initialize($config);

            $data = [
                'results' => $this->Produk_model->list($limit, $start),
                'links' => $this->pagination->create_links(),
                'kategori' => $kategori
            ];
        }

        $this->load->view('produk/index', $data);
    }
    
    public function create()
    {
        $kategori = $this->Produk_model->get_kategori();
        $dataKategori = ['dataKategori' => $kategori];
        $this->load->view('produk/create', $dataKategori);
    }

    public function store()
    {
        $data = ['nama_produk' => $this->input->post('nama_produk'),
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'komposisi' => $this->input->post('komposisi'),
                'indikasi' => $this->input->post('indikasi'),
                'stok' =>$this->input->post('stok'),
                'harga' => $this->input->post('harga')
                 ];
        $rules = [
            [
            'field' => 'nama_produk',
            'label' => 'nama_produk',
            'rules' => 'trim|required'
            ]
        ];
        
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run()) {
            $result = $this->Produk_model->insert($data);
            if ($result) {
                redirect('produk');
            }
        } else {
            redirect('produk/create');
        }
    }

    public function show($id_produk)
    {
        $produk = $this->Produk_model->show($id_produk);
        $data = ['data' => $produk];
        $data['kategori'] = $this->Produk_model->get_kategori();
        $this->load->view('produk/show', $data);
    }

    public function edit($id_produk)
    {
        $produk = $this->Produk_model->show($id_produk);
        $kategori = $this->Produk_model->get_kategori();
        $data = ['data' => $produk,
                'kategori' => $kategori
                ];
        $this->load->view('produk/edit', $data);
    }

    public function update($id_produk)
    {
        // TODO: implementasi update data berdasarkan $id
        $id_produk = $this->input->post('id_produk');
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'komposisi' => $this->input->post('komposisi'),
            'indikasi' => $this->input->post('indikasi'),
            'stok' => $this->input->post('stok'),
            'harga' => $this->input->post('harga')
        );

        $this->Produk_model->update($id_produk, $data);
        redirect('produk');
    }

    public function destroy($id_produk)
    {
        $this->Produk_model->delete($id_produk);
        redirect('produk');
    }


}

/* End of file Produk.php */


?>