// app/Models/Brg.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brg extends Model
{
    protected $table = 'brg';
    protected $primaryKey = 'id';
    protected $fillable = ['nm_brg', 'harga', 'stok'];
}

// app/Http/Controllers/BrgController.php
<?php

namespace App\Http\Controllers;

use App\Models\Brg;
use Illuminate\Http\Request;

class BrgController extends Controller
{
    public function index()
    {
        $brg = Brg::orderBy('created_at', 'DESC')->get();
        return view('brg.index', compact('brg'));
    }
}

// resources/views/brg/index.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brg as $barang)
                            <tr>
                                <td>{{ $barang->nm_brg }}</td>
                                <td>Rp {{number_format($barang->harga) }}</td>
                                <td>{{ $barang->stok }}</td>
                                <td>{{ $barang->created_at}}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
