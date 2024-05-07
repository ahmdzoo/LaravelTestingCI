<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // Mengambil semua data transaksi dari model Transaction
        $transactions = Transaction::all();

        // Mengirim data transaksi ke tampilan transactions.index
        return view('transactions.index', compact('transactions'));
    }
}