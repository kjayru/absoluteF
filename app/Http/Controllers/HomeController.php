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
        return view('front.secciones',['total'=>$total,'paginas'=>$paginas,'actual'=>$actual,'twitts'=>$posts]);
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
        $twitts = Twitt::paginate(10);

        return response()->json($twitts);
    }


    public function demoview(){

        $twitts = DB::table('twitts')->paginate(10);


        return view('front.pagedemo',['twitts'=>$twitts,'total'=>$twitts->total()]);


    }


    public static function filtro($id){
        $url = "https://s3.amazonaws.com/arquea-absolute-dev/output/".$id.".mp4";

        $headers = get_headers($url);

        $part = explode(" ",$headers[0]);


        if($part[1]=='200'){
            echo $id." existe video<br>";
            $video = new Video();

        }

//echo "id: ".$id."<br>";
    }
}

