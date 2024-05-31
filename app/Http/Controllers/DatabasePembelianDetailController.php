<?php

namespace App\Http\Controllers;

use App\Models\DatabasePembelian;
use App\Models\DatabasePembelianDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatabasePembelianDetailController extends Controller
{
    public function index()
    {
        return view('page.admin.pembelian.indexDetailPembelian');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabasePembelianDetail::with('barang')->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('barang.kode_barang', function ($row) {
                    return $row->barang->kode_barang;
                })
                ->addColumn('barang.nama_barang', function ($row) {
                    return $row->barang->nama_barang;
                })
                ->addColumn('barang.harga_jual', function ($row) {
                    return $row->barang->harga_beli;
                })
                ->addColumn('options', function ($detailPembelian) {
                    $deleteUrl = route('pembelian.destroy', $detailPembelian->kode_transaksi); // Assuming 'destroy' is the route name for deleting a 'vendor'
                    return "<a style='border: none; background-color:transparent;' class='hapusData' data-kode_detailPembelian='$detailPembelian->kode_transaksi' data-url='$deleteUrl'><i class='fas fa-trash fa-lg text-danger'></i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
        return response()->json(['message' => 'Unauthorized'], 403);
    }

    public function hapusPembelian($kode_transaksi)
    {
        $pembelian = DatabasePembelian::findOrFail($kode_transaksi);
        $pembelian->delete();

        return response()->json(['msg' => 'Data Pembelian berhasil dihapus.']);
    }
}
