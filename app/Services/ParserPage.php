<?php


namespace App\Services;

use Sunra\PhpSimple\HtmlDomParser;

class ParserPage
{
    public $sourcePage;

    /**
     * ParserPage constructor.
     * @param $sourcePage
     */
    public function __construct($sourcePage)
    {
        $this->sourcePage = $sourcePage;
    }


    public function retrievingDataPage()
    {
        $items = [];

        $document = HtmlDomParser::str_get_html($this->sourcePage);
        $productList = $document->find('div[class=product_list]');

        foreach ($productList as $product) {
            $price = 0;
            $price_promotional = 0;
            $price_discount_percentage = 0;

            $item['page_url'] = $product->children[0]->getAttribute('href');
            $item['product_name'] = $product->children[0]->children[0]->innertext();

            $priseLoading = array_values(array_filter(preg_split("/[^,.0-9]/", $product->find('div[class=price]', 0)->plaintext)));
            if (count($priseLoading) === 1) {
                $item['price_promotional'] = $price_promotional;
                $item['price_discount_percentage'] = $price_discount_percentage;
                $item['price'] = str_replace(',','',$priseLoading[0]);
            }
            if (count($priseLoading) === 3) {
                $item['price_promotional'] = str_replace(',','',$priseLoading[2]);
                $item['price_discount_percentage'] = $priseLoading[1];
                $item['price'] = str_replace(',','',$priseLoading[0]);
            }
            $items[] = $item;
        }
        return $items;
    }
}
