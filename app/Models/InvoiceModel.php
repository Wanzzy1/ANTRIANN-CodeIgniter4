<?php

namespace App\Models;

use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    protected $allowedFields = ['invoice_number', 'amount', 'customer_name'];

    public function generateInvoiceNumber()
    {
        // Mendapatkan tahun dan bulan saat ini
        $yearMonth = date('Ym');

        // Mendapatkan jumlah invoice pada bulan ini
        $count = $this->where('DATE_FORMAT(created_at, "%Y%m")', $yearMonth)->countAllResults();

        // Membuat nomor invoice dengan format INV-YYYYMM-XXXX
        $invoiceNumber = 'INV-' . $yearMonth . '-' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);

        return $invoiceNumber;
    }
}