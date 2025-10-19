<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\Excel as Download;

class CustomerController extends Controller
{
    public function index(){
    $customer = Customer::all();
    return view('frontend.customer.index', compact('customer'));
    }

    public function export(){
        return Excel::download(new CustomerExport, 'Customer.xlsx');
    }
}                                                                           // if ($request->ajax()) {
                                                                            //             $data = User::select('*');
                                                                            //             return DataTables::of($data)->make(true);
                                                                            //         }
                                                                            //         return view('users.index');

