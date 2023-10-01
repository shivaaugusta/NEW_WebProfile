<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\modContact;

class Kontak extends BaseController
{
    public function save()
    {
        // Ambil data yang dikirim dari form
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('telepon');
        $pesan = $this->request->getPost('pesan');

        // Validasi data jika diperlukan

        // Buat array data kontak untuk disimpan ke database
        $data = [
            'nama' => $nama,
            'email' => $email,
            'subject' => $subject,
            'pesan' => $pesan
        ];

        // Panggil model KontakModel
        $model = new modContact();

        // Panggil fungsi insertKontak di model untuk menyimpan data kontak ke database
        $model->insertKontak($data);

        // Setelah data disimpan, Anda dapat melakukan redirect ke halaman lain atau menampilkan pesan sukses
        return "Sukses Menginput";
        //return redirect()->to('../pages/users/index');
}
}
?>