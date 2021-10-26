<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Shorturl;
use App\Domain\PseudoCrypt;

class ShorturlController extends Controller
{

    /**
     * Create short url
     *
     * @return string
     */
    public function createShorturl()
    {
        if(!isset($_GET['link'])){
            return false;
        }

        $shorturl = new Shorturl();
        $shorturl->oldurl = $_GET['link'];
        $md = $_GET['link'].time();
        $shorturl->shorturl = PseudoCrypt::hash($md, 7);
        $shorturl->save();


        echo $shorturl->shorturl;
    }

    /**
     * Get old url
     *
     * @return void
     */
    public function getShorturl()
    {

        $short_url = "";
        $short_url = explode('/',$_SERVER['REQUEST_URI'])[1];
        $old_url = Shorturl::where('shorturl',$short_url)->first();

        if($old_url) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$old_url->oldurl);
        }else {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /");
        }

    }
}
