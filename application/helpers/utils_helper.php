<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( ! function_exists('dd'))
{
    function dd($var)
    {
        die(var_dump($var));
    }
}

if( ! function_exists('auth'))
{
    function auth()
    {
        $CI =& get_instance();
        return $CI->authenticate;
    }
}

if( ! function_exists('renderView'))
{
    function renderView($src, $data = NULL, $header = NULL, $footer = NULL)
    {
        $CI =& get_instance();
        $tpl["header"] = $CI->load->view("layout/header", $header, TRUE);
        $tpl["footer"] = $CI->load->view("layout/footer", $footer, TRUE);
        if(auth()->isLogged())
        {
            $tpl["content"] = $CI->load->view($src, $data, TRUE);
            $CI->load->view("layout/master", $tpl);
        }
        else
        {
            $CI->load->view($src, $tpl, $data);
        }
    }
}

if( ! function_exists('calcBaki'))
{
    function calcBaki($bahanId)
    {
        $amaunInv = 0;
        $amaunConsume = 0;

        $CI =& get_instance();
        $CI->load->model("minventori");
        $CI->load->model("mpesanan");

        $rstInv = $CI->minventori->getJumlahAmaun($bahanId);
        $rstConsume = $CI->mpesanan->getJumlahAmaun($bahanId);

        if($rstInv->num_rows())
        {
            $amaunInv = $rstInv->row()->total_amaun;
        }

        if($rstConsume->num_rows())
        {
            $amaunConsume = $rstConsume->row()->total_amaun;
        }

        return $amaunInv - $amaunConsume;

    }
}

if( ! function_exists('namaBahan'))
{
    function namaBahan($bahanId)
    {
        $CI =& get_instance();
        $CI->load->model("mbahan");

        $rstInv = $CI->mbahan->find($bahanId);

        return $rstInv->row()->bahan;

    }
}

if( ! function_exists('namaResepi'))
{
    function namaResepi($bahanId)
    {
        $CI =& get_instance();
        $CI->load->model("mresepi");

        $rstInv = $CI->mresepi->find($bahanId);

        return $rstInv->row()->nama;

    }
}
