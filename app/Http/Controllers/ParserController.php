<?php

namespace App\Http\Controllers;

use App\Services\LoadPage;
use App\Services\ParserPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;


class ParserController extends Controller
{
    public $loaderPage;
    public $parserPage;
    public $domainName;
    public $pageLoadUrl;

    /**
     * ParserController constructor.
     */
    public function __construct()
    {
        $this->pageLoadUrl = Config::get('constants.page_url.page_load');
        $this->domainName = parse_url($this->pageLoadUrl, PHP_URL_HOST);


    }

    public function index()
    {
        return view('index');
    }

    public function loadingPage()
    {
        $this->loaderPage = new LoadPage($this->pageLoadUrl);

        $message = 'Page : ' . $this->pageLoadUrl . ' loaded !';
        $loadingPage = $this->loaderPage->loadingPage();
        if ($loadingPage === false) {
            $message = 'The page : ' . $this->pageLoadUrl . ' is not loaded!';
        }

        return view('load', [
            'message' => $message,
            'loadingPage' => $loadingPage
        ]);
    }

    public function parsingPage(Request $request)
    {
        $this->parserPage = new ParserPage($request->session()->get('loadingPage'));
        $resultArray = $this->parserPage->retrievingDataPage();
        $success = 'Data retrieved from page : ' . $this->pageLoadUrl . '!';
        return redirect('/')->with('success', $success);

    }
}

