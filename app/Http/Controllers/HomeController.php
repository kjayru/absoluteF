<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Register;
use App\Twitt;
use App\Video;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.index');
    }


    public function secciones(){

        $posts = Twitt::inRandomOrder()->limit(10)->get();
        $twitts = DB::table('twitts')->paginate(10);
        $paginador = $twitts->count();
        $total = $twitts->total();
        $paginas = $twitts->lastPage();
        $actual = $twitts->currentPage();
        $cantidad = Twitt::count();


        $url = file_get_contents("https://dflc3vgmc8.execute-api.us-east-1.amazonaws.com/Prod/tweets/hacked/?limite=10",true);


        $twitts = json_decode($url, true);

        $totaltwitts = $twitts['totalTweets'];

        return view('front.secciones',['total'=>$total,'paginas'=>$paginas,'actual'=>$actual,'twitts'=>$posts,'cantidad'=>$cantidad,'totaltwitts'=>$totaltwitts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = Register::create(['nombres'=>$request->nombres,'email'=>$request->email,'suscripcion'=>$request->suscripcion, 'terminos'=>$request->terminos]);

        return response()->json(['rpta'=>'ok']);
    }


    public function getDataTwitterUrl(){

       // $url = file_get_contents("https://oonucvrznj.execute-api.us-east-1.amazonaws.com/Prod/tweets",true);
        $url = file_get_contents("https://dflc3vgmc8.execute-api.us-east-1.amazonaws.com/Prod/tweets/hacked/?limite=1000",true);


         $twitts = json_decode($url, true);
         //dd($twitts);
         // dd($twitts['data']);

          foreach($twitts['data'] as $g){

                    //print_r($g['text']);
                    $existe = Twitt::where('tweetLocalCreationDate',$g['tweetLocalCreationDate'])->count();

                    //insert table
                    if($existe==0){
                        $tw = new Twitt();
                    $tw->category = $g['category'];
                    $tw->createdAt = $g['createdAt'];
                    $tw->text = $g['text'];
                    $tw->fullText = $g['fullText'];
                    $tw->displayTextRange = serialize($g['displayTextRange']);
                    $tw->safeDisplayTextRange = serialize($g['safeDisplayTextRange']);
                    $tw->source = $g['source'];
                    $tw->truncated = $g['truncated'];
                    $tw->replyCount = $g['replyCount'];

                    $tw->inReplyToStatusId = $g['inReplyToStatusId'];

                    $tw->inReplyToStatusIdStr = $g['inReplyToStatusIdStr'];
                    $tw->inReplyToUserId = $g['inReplyToUserId'];
                    $tw->inReplyToUserIdStr = $g['inReplyToUserIdStr'];
                    $tw->inReplyToScreenName = $g['inReplyToScreenName'];
                    $tw->createdBy = serialize($g['createdBy']);

                    $tw->retweetCount = $g['retweetCount'];
                    $tw->favorited = $g['favorited'];
                    $tw->favoriteCount = $g['favoriteCount'];
                    $tw->retweeted = $g['retweeted'];
                    $tw->possiblySensitive = $g['possiblySensitive'];

                    $tw->tweetLocalCreationDate = $g['tweetLocalCreationDate'];
                    $tw->isRetweet = $g['isRetweet'];
                    $tw->quoteCount = $g['quoteCount'];
                    $tw->quotedStatusId = $g['quotedStatusId'];
                    $tw->quotedStatusIdStr = $g['quotedStatusIdStr'];

                    $tw->isTweetPublished = $g['isTweetPublished'];
                    $tw->isTweetDestroyed = $g['isTweetDestroyed'];
                    $tw->url = $g['url'];
                    $tw->id = $g['id'];
                    $tw->idStr = $g['idStr'];

                    $tw->save();
                    }


          }
    }


    public function getdata(){
        $twitts =Twitt::inRandomOrder()->limit(15)->get();

        return response()->json($twitts);
    }


    public function demoview(){

        $twitts = DB::table('twitts')->paginate(10);


        return view('front.pagedemo',['twitts'=>$twitts,'total'=>$twitts->total()]);


    }

    public function getUsuario($usuario){



        $userdata = Twitt::inRandomOrder()->limit(20)->get();
        //dd($userdata->items());
        return response()->json($userdata);
    }

    public function getCategoria($filtro){


        $userdata = Twitt::where('category',$filtro)->inRandomOrder()->limit(20)->get();

        return response()->json($userdata);
    }

    public function galeria()
    {
        return view('interno.galeria');
    }


    public function videos(){
        return view('interno.video');
    }
    public function videosMob(){
        return view('interno.video-mob');
    }

    public function tweetrigami()
    {
        return view('interno.tweetrigami');
    }

    public function hackeoTwitter(){

        $posts = Twitt::inRandomOrder()->limit(10)->get();
        $twitts = DB::table('twitts')->paginate(10);
        $paginador = $twitts->count();
        $total = $twitts->total();
        $paginas = $twitts->lastPage();
        $actual = $twitts->currentPage();
        $cantidad = Twitt::count();

        $url = file_get_contents("https://dflc3vgmc8.execute-api.us-east-1.amazonaws.com/Prod/tweets/hacked/?limite=10",true);


        $twitts = json_decode($url, true);

        $totaltwitts = $twitts['totalTweets'];

        return view('interno.tweetrigami',['total'=>$total,'paginas'=>$paginas,'actual'=>$actual,'twitts'=>$posts,'cantidad'=>$cantidad,'totaltwitts'=>$totaltwitts]);
    }

    public function hackeoinstagram(){
        return view('interno.instagran');
    }
}

