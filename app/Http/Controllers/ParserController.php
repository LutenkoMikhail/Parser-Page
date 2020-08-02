<?php

namespace App\Http\Controllers;

use App\Services\LoadPage;
use App\Services\ParserPage;
use App\SiteInfo;
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
        $today = date("Y-m-d H:i:s");

        $this->loaderPage = new LoadPage($this->pageLoadUrl);
        $loadingPage = $this->loaderPage->loadingPage();

        if ($loadingPage !== false) {
            $this->parserPage = new ParserPage($loadingPage);
            $resultArray = $this->parserPage->retrievingDataPage();

            foreach ($resultArray as $price) {
                $price['domain_name'] = $this->domainName;
                $price['date_load'] = $today;
                $fullArray[] = $price;
            }
            SiteInfo::insert($fullArray);
            $message = 'Data retrieved from page : ' . $this->pageLoadUrl . ' and save to base!';
        } else {
            $message = 'The page : ' . $this->pageLoadUrl . ' is not loaded!';
        }
        return view('index', [
            'message' => $message
        ]);
    }

    public function report()
    {
        $allLoadingProduct = SiteInfo::latest()->paginate(8);
        return view('report', [
            'products' => $allLoadingProduct
        ]);
    }
}
