<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kategori extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->library('form_validation');
		    $this->load->library('pagination');
            $this->load->model('Kategori_model');
        }

        /*public function index()
        {
            $kategori_produk = $this->Kategori_model->list2();
            $data = [
                'title' => 'Healthy Pharma :: Kategori Produk',
                'kategori_produk' => $kategori_produk
            ];
            $this->load->view('kategori/index', $data);
        }*/
        
        /*public function index()
        {
            $data = [];
            $total = $this->Kategori_model->getTotal();

            if ($total > 0) {
                $limit = 2;
                $start = $this->uri->segment(3, 0);

                $config = [
                    'base_url' => base_url() . 'kategori/index',
                    'total_rows' => $total,
                    'per_page' => $limit,
                    'uri_segment' => 3,
                ];
                $this->pagination->initialize($config);

                $data = [
                    'results' => $this->Kategori_model->list($limit, $start),
                    'links' => $this->pagination->create_links(),
                ];
            }
            $this->load->view('kategori/index', $data);
        }*/

    public function index()
    {
        $data = [];
        $total = $this->Kategori_model->getTotal();

        if ($total > 0) {
            $limit = 2;
            $start = $this->uri->segment(3, 0);

            $config = [
                'base_url' => base_url() . 'kategori/index',
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
                'results' => $this->Kategori_model->list($limit, $start),
                'links' => $this->pagination->create_links(),
            ];
        }

        $this->load->view('kategori/index', $data);
    }
        
        public function create()
        {
            $this->load->view('kategori/create');
        }

        public function store()
        {
            $data = ['nama_kategori' => $this->input->post('nama_kategori')];
            $rules = [
                [
                'field' => 'nama_kategori',
                'label' => 'nama_kategori',
                'rules' => 'trim|required'
                ]
            ];
            
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                $result = $this->Kategori_model->insert($data);
                if ($result) {
                    redirect('kategori');
                }
            } else {
                redirect('kategori/create');
            }
        }

        public function show($id_kategori)
        {
            $kategori_produk = $this->Kategori_model->show($id_kategori);
            $data = [
                'data' => $kategori_produk
            ];
            $this->load->view('kategori/show', $data);
        }

        public function edit($id_kategori)
        {
            $kategori = $this->Kategori_model->show($id_kategori);
            $data = [
                'data' => $kategori
            ];
            $this->load->view('kategori/edit', $data);
        }
    
        public function update($id_kategori)
        {
            // TODO: implementasi update data berdasarkan $id
            $id_kategori = $this->input->post('id_kategori');
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori')
            );

            $this->Kategori_model->update($id_kategori, $data);
            redirect('kategori');
        }
    
        public function destroy($id_kategori)
        {
            $this->Kategori_model->delete($id_kategori);
            redirect('kategori');
        }
    
    }
    
    /* End of file Kategori.php */
    