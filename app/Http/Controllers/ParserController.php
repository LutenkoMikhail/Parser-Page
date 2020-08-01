<?php

namespace App\Http\Controllers;

use App\Services\LoadPage;
use App\Services\ParserPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class ParserController extends Controller
{
    public $loadPage;
    public $parserPage;
    public $domainName;
    public $pageLoadUrl;

    /**
     * ParserController constructor.
     */
    public function __construct()
    {
        $this->pageLoadUrl = Config::get('constants.page_url.page_load');
        $this->domainName = parse_url($this->pageLoadUrl , PHP_URL_HOST);

        $this->loadPage = new LoadPage($this->pageLoadUrl);
        $this->parserPage = new ParserPage();
    }

    public function index()
    {
        return view('index');
    }

    public function loadingPage()
    {
        $message = 'Page : '.$this->pageLoadUrl .' loaded !';
        $resultPage = $this->loadPage->loadingPage();
        if ($resultPage === false) {
            $message = 'The page : '.$this->pageLoadUrl .' is not loaded!';
        }
        return view('load', ['message' => $message]);
    }
}

