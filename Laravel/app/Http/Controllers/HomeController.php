<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function acknowledgement()
    {
        return view('acknowledgement');
    }

    public function excel()
    {
        $leads = User::select('email', 'name', 'lastname', 'ip', 'created_at')->where('interestedInProgramming', '=', 1)->get();

        Excel::create(sprintf('Grupo 9 - Show me the leads - %s', Carbon::now()->format('Y-m-d H:i:s')), function ($excel) use ($leads) {

            $excel->sheet('Show me the leads', function ($sheet) use ($leads) {
                $sheet->loadView('leads', compact('leads'));
            });

        })->export('csv');
    }

    public function excelAllLeads()
    {
        $leads = User::select('email', 'name', 'lastname', 'ip', 'created_at')->get();

        Excel::create(sprintf('Grupo 9 - Show me all the leads - %s', Carbon::now()->format('Y-m-d H:i:s')), function ($excel) use ($leads) {

            $excel->sheet('Show me the leads', function ($sheet) use ($leads) {
                $sheet->loadView('leads', compact('leads'));
            });

        })->export('csv');
    }
}



