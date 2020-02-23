<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Clase;
use App\Recurso;
use DB;
use Aws;
use Aws\CloudFront\CloudFrontClient;
use Aws\Exception\AwsException;

class ReproductorController extends Controller
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

    
    public function index($url_curso, $url)
    {
        
        $curso = Curso::where('url', $url_curso)->firstOrFail();
        $clases = Clase::where('url', $url)->firstOrFail();
        $recursos = DB::table('recursos')
        ->where('url', $url)
        ->get();

        $clase_siguientes = Clase::where([
            ['id','>', $clases->id], 
            ['id_curso', $url_curso]
        ])
        ->orderBy('id', 'asc')
        ->limit(1)
        ->get();


        $client = new Aws\CloudFront\CloudFrontClient([
            'profile' => 'default',
            'version' => '2014-11-06',
            'region' => 'us-east-2'
        ]);
        
// Set up parameter values for the resource
$resourceKey = 'https://d1h4p4srnnzybm.cloudfront.net/Analizar-cambios-en-los-archivos-de-tu-proyecto-con-Git.mp4';
$expires = time() + 10000;

// Create a signed URL for the resource using the canned policy
$signedUrlCannedPolicy = $client->getSignedUrl([
    'url' => $resourceKey,
    'expires' => $expires,
    'private_key' => base_path() . '/public/pk-APKAJGOJXTSBE3UPPJTQ.pem',
    'key_pair_id' => 'APKAJGOJXTSBE3UPPJTQ'
]);
      
        return view('reproductor', compact('curso', 'clases','recursos', 'clase_siguientes', 'signedUrlCannedPolicy'));

    }
}
