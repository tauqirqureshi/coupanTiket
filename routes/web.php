<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ticket;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


Route::get('/', function () {

    return view('index');
});

// Route::post('/search', function () {
//     $input = Input::get('Search');
//     info('input: ' .$input);
//     if($input != ''){
//         $ticket = Ticket::where('certificate_no','LIKE','%'.$input.'%')->get();
//         if(count ($ticket) > 0){
//             return view('index')->withDetails($ticket)->withQuery('ticket',$input);
//         }

//     }
//     return view('index');
// });

Route::post ( '/search', function (Request $request) {
    // info('input: '.$request);
	$input = $request->input('search');
    info('input: ' .$input);
    if ($input != '') {
        // $ticket = Ticket::where('certificate_no', 'LIKE', '%' . $input . '%')->orderBy('created_at')->get();
        // $ticket = Ticket::leftJoin('products', 'tickets.id', '=', 'products.ticket_id')
        // ->where(function ($query) use ($input) {
        //     $query->where('tickets.certificate_no', 'LIKE', '%' . $input . '%')
        //           ->orWhere('products.name', 'LIKE', '%' . $input . '%');
        // })
        // ->orderBy('tickets.created_at', 'ASC')
        // ->get();
        $ticket = Ticket::where('certificate_no', 'LIKE', '%' . $input . '%')
        ->orWhereHas('product', function ($query) use ($input) {
            $query->where('name', 'LIKE', '%' . $input . '%');
        })
        ->orderBy('created_at')
        ->get();

        // info('input: ' .$ticket[0]->product);

        if (count($ticket) > 0) {
            return view ( 'index' )->withDetails ( $ticket )->withQuery ( $input );
            // return view('index')->withDetails($ticket)->withQuery('ticket', $input);
        }
        else
			return view ( 'index' )->withMessage ( 'No Details found. Try to search again !' );
    }
    return view('index');
} );

