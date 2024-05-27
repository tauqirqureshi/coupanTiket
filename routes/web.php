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
        $ticket = Ticket::where('certificate_no', '=',  $input )
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
			return view ( 'index' )->withMessage ( 'No Details found. Try to search again !' )->withQuery ( $input );
    }
    return view('index');
} );

// Route::get('/field/{id}', function (Require $request){});
Route::get ( '/Ticket/{id}', function (Request $request) {
    info('input: '.$request->id);
	$input = $request->id;
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
        $ticket = Ticket::where('certificate_no', '=',  $input
        )
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

Route::get ( '/qrcodeview/{id}', function (Request $request) {
    info('input: '.$request->id);
	$input = $request->id;
    info('input: ' .$input);
    $url = url('/Ticket/');
    if ($input != '') {
        // $ticket = Ticket::where('certificate_no', 'LIKE', '%' . $input . '%')->orderBy('created_at')->get();
        // $ticket = Ticket::leftJoin('products', 'tickets.id', '=', 'products.ticket_id')
        // ->where(function ($query) use ($input) {
        //     $query->where('tickets.certificate_no', 'LIKE', '%' . $input . '%')
        //           ->orWhere('products.name', 'LIKE', '%' . $input . '%');
        // })
        // ->orderBy('tickets.created_at', 'ASC')
        // ->get();
        $certificateNumbers = explode(',', $input);

        $tickets = Ticket::whereIn('certificate_no', $certificateNumbers)->get();
        // $ticket = Ticket::where('certificate_no', '=',  $input
        // )
        // ->get();

        // info('input: ' .$ticket[0]->product);

        if (count($tickets) > 0) {
            $ticketsWithUrls = $tickets->map(function($ticket) {
                $ticket->url = url('/Ticket/' . $ticket->certificate_no);
                return $ticket;
            });
            // return view ( 'pdf2',['ticket' => $input] );
            return view('pdf2', compact('ticketsWithUrls'));
            // return view('index')->withDetails($ticket)->withQuery('ticket', $input);
        }
        else
			return view ( 'pdf2' )->withMessage ( 'No Details found. Try to search again !' );
    }
    return view('pdf2')->withMessage ( 'No Details found. Try to search again !' );;
} );
