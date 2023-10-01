<?php 
namespace App\Models;
use CodeIgniter\Model;

class modContact extends Model
{
    protected $table = "contact";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama','email','subject','pesan'];

    public function insertKontak($data)
    {
        return $this->insert($data);
    }
}
?>