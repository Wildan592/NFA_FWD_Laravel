<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Js;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if($transactions->isEmpty()){
            return response()->json([
                "succes" => true,
                "message" => "Resource data not found!"
            ], 200);
        }


        return response()->json([
            "succes" => true,
            "message" => "Get all resources",
            "data" => $transactions
        ], 200 );
    }

    public function store(Request $request)
    {
        // 1. Validator & Cek Validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validator error',
                'data' => $validator->errors()
            ], 422);
        }
        // 2. generate orderNumber -> unique | ORD-02315667
        $uniqueCode = 'ORD-' . strtoupper(uniqid());

        // 3. Ambil user yang sedang login & cek login (apakah ada data user?)
        $user= auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized!',

            ], 401);
        }

        // 4. Mencari data buku dari request
        $book = Book::find($request->book_id);

        // 5. Cek stock buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stok barang tidak cukup',
            ], 400);
        }

        // 6. Hitung total harga = price * quantity
        $totalAmount = $book->price * $request->quantity;

        // 7. Kurangi stok buku(update)
        $book->stock -= $request->quantity;
        $book->save();

        // 8. simpan data transaksi
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction create successfully!',
            'data' => $transactions
        ], 201);
    }
}
