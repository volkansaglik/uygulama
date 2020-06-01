<?php

class Personel extends CI_Controller {

    public function index ()
    {
        $rows = $this->db->get("personel")->result();

/*
        $viewData = array(
            "rows"  => $rows
        );*/

        $viewData = new stdClass();
        $viewData->rows = $rows;

        $this->load->view('listeleme', $viewData);

    }

    public function insertPage()
    {
        $this->load->view('ekle');
    }

    public function insert()
    {
        $title = $this->input->post('title');
        $detail = $this->input->post('detail');

        $data = array(
          'title' =>    $title,
          'detail' =>  $detail
        );

        $insert = $this->db->insert('personel', $data);

        if ($insert){
            redirect(base_url('personel'));
        }else{
            echo "ekleme başarıSIZ";
        }

    }





    public function updatePage()
    {
        echo "düzneleme sayfası";
    }

    public function update()
    {
        echo "update işlemlerinin olacağı yer";
    }

    public function deletePage()
    {
        echo "silme sayfası";
    }

    public function delete()
    {
        echo "silme işlemlerinin olacağı yer";
    }


}