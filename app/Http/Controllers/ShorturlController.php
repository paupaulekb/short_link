<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
    public function createShorturl(Request $request)
    {
        if(!$request->get('link')){
            return false;
        }

        $shorturl = new Shorturl();
        $shorturl->oldurl = $request->get('link');
        $md = $request->get('link').time();
        $shorturl->shorturl = PseudoCrypt::hash($md, 7);
        $shorturl->save();


        echo $shorturl->shorturl;
    }

    /**
     * Get old url
     *
     * @return void
     */
    public function getShorturl(Request $request)
    {
        $short_url = explode('/',$request->getPathInfo())[1];
        $old_url = Shorturl::where('shorturl',$short_url)->first();

        if($old_url) {
            redirect($old_url->oldurl);
        }else {
            redirect("/");
        }

    }
}
