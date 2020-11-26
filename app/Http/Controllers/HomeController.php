<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home(){
        return view('home');
    }

//     do {
//       $test = get_trusted_url('SMRETAIL\qrci0001','10.13.19.225:8060','/views/ITDashboard-DataReconandQualityMonitoring/BIvsMMSRecon/');
//     } while ($test <= 0);

//    // CREATE FUNCTION FOR DO

//     function get_trusted_url($user,$server,$view_url) {
//       $params = ':embed=yes&:toolbar=yes';

//       $ticket = get_trusted_ticket($server, $user, $_SERVER['REMOTE_ADDR']);
//         return $ticket;
//     }

//     Function get_trusted_ticket($wgserver, $user, $remote_addr) {
//       $params = array(
//         'username' => $user,
//         'client_ip' => $remote_addr
//       );

//       return do_post_request("http://$wgserver/trusted", $params);
//     }

//     function do_post_request($url, $data, $optional_headers = null)
//     {
//       $params = array('http' => array(
//                   'method' => 'POST',
//                   'content' => http_build_query($data)
//                 ));
//       if ($optional_headers !== null) {
//         $params['http']['header'] = $optional_headers;
//       }
//       $ctx = stream_context_create($params);
//       $fp = @fopen($url, 'rb', false, $ctx);
//       if (!$fp) {
//         throw new Exception("Problem with $url, $php_errormsg");
//       }
//       $response = @stream_get_contents($fp);
//       //echo $response;
//       if ($response === false) {
//         throw new Exception("Problem reading data from $url, $php_errormsg");
//       }
//       return $response;
// }


}
