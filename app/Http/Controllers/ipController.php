<?php
namespace App\Http\Controllers;


use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ipController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ip');
    }

    public function ip()
    {
        return view('ip');
    }

    public function ipConsulta(Request $request)
    {
        //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'endereco.required' => 'É obrigatório um ip para consulta',
            'endereco.ip' => 'O IP não é válido.',
        );
        //vetor com as especificações de validações
        $regras = array(
            'endereco' => 'required|ip',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('ip')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        
        $locationobject = GeoIP::getLocation($request->endereco);

        $mapa = \GoogleMaps::load('placeadd')
                ->setParam([
                   'location' => [
                        'lat'  => $locationobject->lat,
                        'lng'  => $locationobject->long
                      ],
                   'accuracy'           => 0,
                   "name"               =>  "Localização do servidor",
                   "types"              => ["shoe_store"],             
                          ])
                  ->get();

        
        return view('ip.ipresultado', ['consulta' => $locationobject]);
    }
}
