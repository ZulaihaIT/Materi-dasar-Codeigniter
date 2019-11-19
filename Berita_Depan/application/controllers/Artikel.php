<?php
class Artikel extends CI_Controller {

    function form() {
        $this->load->view('artikel_input');
    }

    function insert() {
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'judul' => $this->input->post('in_judul'),
                'deskripsi' => $this->input->post('in_deskripsi'),
                'kategori' => $this->input->post('in_kategori'),
                'gambar' => $gambar['file_name']);

            $this->Artikel_m->insert_db($data);
            redirect('Artikel');
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
    }

    function index() {
        $this->load->view('artikel_v');
    }

    function delete($id) {
        $this->Artikel_m->delete_db($id);
        redirect('Artikel');
    }

    function select_by($id) {
        $data['artikel'] = $this->Artikel_m->select_by_db($id);
        $this->load->view('artikel_edit', $data);
    }

    function edit() {
        $id = $this->input->get('id');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('in_gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'judul' => $this->input->post('in_judul'),
                'deskripsi' => $this->input->post('in_deskripsi'),
                'kategori' => $this->input->post('in_kategori'),
                'gambar' => $gambar['file_name'],
                 );
        } else {
            $data = array(
            'judul' => $this->input->post('in_judul'),
            'deskripsi' => $this->input->post('in_deskripsi'),
            'kategori' => $this->input->post('in_kategori'),
        );
        }
        echo $this->Artikel_m->edit_db($id, $data);
        redirect('Artikel');
    }
    
    //WEB SERVICE
    function select() {
        //menampilkan semua data dari tabel artikel
        $response = array();
        $data['data'] = array();

        $result = $this->Artikel_m->select_artikel();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_artikel'] = $value->id_artikel;
                $response['judul'] = $value->judul;
                $response['deskripsi'] = $value->deskripsi;
                $response['kategori'] = $value->kategori;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    function select_by_get($id) {
        //menampilkan data dari tabel artikel berdasarkan id_artikel
        //id_artikel dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Artikel_m->select_artikel_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_artikel'] = $value->id_artikel;
                $response['judul'] = $value->judul;
                $response['deskripsi'] = $value->deskripsi;
                $response['kategori'] = $value->kategori;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    function select_by_post() {
        //menampilkan semua data dari tabel artikel berdasarkan id_artikel
        //id_artikel dapat dari post

        $id = $this->input->post('id_artikel');
        
        $response = array();
        $data['data'] = array();

        $result = $this->Artikel_m->select_artikel_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_artikel'] = $value->id_artikel;
                $response['judul'] = $value->judul;
                $response['deskripsi'] = $value->deskripsi;
                $response['kategori'] = $value->kategori;


                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
}
