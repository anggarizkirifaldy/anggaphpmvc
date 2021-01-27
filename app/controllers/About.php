<?php

class About extends Controller{
    public function index($nama = 'angga', $pekerjaan = 'pelajar', $umur = 17)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'about my';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
{
    $data['judul'] = 'pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');

}
}