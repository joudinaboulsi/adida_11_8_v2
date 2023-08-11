<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Repositories\ProductsRepository;
use Carbon\Carbon;
use Auth;
use Mail;

class PagesController extends Controller
{

    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    //home page
    public function home()
    {      
        // Returns the top 1
        $crispy = $this->productsRepository->showTop2();

        // Returns the top 2
        $top = $this->productsRepository->showTop1();

        return view('index', array('crispy' => $crispy, 'top' => $top));
    }

    //about page
    public function about()
    {      
        return view('about');
    }

    //products page
    public function products()
    {      
        // Returns the products list
        $products = $this->productsRepository->show();

        return view('products', array('products' => $products));
    }

    //recipes page
    public function recipes()
    {      
        return view('recipes');
    }

    //packing page
    public function packing()
    {      
        return view('packing');
    }

    //news page
    public function news()
    {      
        return view('news');
    }

    //contact page
    public function contact()
    {      
        return view('contact');
    }
    
    //send contact email
    public function getContactForm(Request $request)
    {
        // initialize an instance of Nocaptcha
        $captcha = new \Anhskohbo\NoCaptcha\NoCaptcha(env('NOCAPTCHA_SECRET'), env('NOCAPTCHA_SITEKEY'));

        // if the captcha is checked
        if (! empty($_POST)) 
        {
            //in your php ignore any submissions that inlcude this field
            if(!empty($_POST['check'])) die();

            else {
                $captcha_resp = $captcha->verifyResponse($_POST['g-recaptcha-response']);

                if($captcha_resp == true)
                {

                    $fullname = $request->input('fullname');
                    $email = $request->input('email');
                    $phone = $request->input('phone');
                    $country = $request->input('country');
                    $sector = $request->input('sector');
                    $msg_client = $request->input('message');

                    Mail::send('emails.contact', array('fullname' => $fullname, 'email' => $email, 'phone' => $phone, 'country' => $country, 'sector' => $sector, 'msg_client' => $msg_client), function($message) use ($email, $fullname)
                    {
                        $message->from($email, $fullname);
                        $message->to('info@adidaspices.com')->subject('Message request from website');
                    });

                }
            }

        }

        // return redirect
        return redirect()->back();
    }

    //order page
    public function order()
    {      
        // Returns the products list
        $products = $this->productsRepository->show();

        return view('order', array('products' => $products));
    }

    //Get selected products
    public function getSelectedProducts(Request $request)
    { 
        $data = $this->productsRepository->getSelectedProducts($request->input('rows_selected')); 
        // return the info to the ajax call
        return response()->json($data);  
   }

   //send contact email
    public function placeOrder(Request $request)
    {
        // initialize an instance of Nocaptcha
        $captcha = new \Anhskohbo\NoCaptcha\NoCaptcha(env('NOCAPTCHA_SECRET'), env('NOCAPTCHA_SITEKEY'));

        // if the captcha is checked
        if (! empty($_POST)) 
        {
            $captcha_resp = $captcha->verifyResponse($_POST['g-recaptcha-response']);

            if($captcha_resp == true)
            {
                $fullname = $request->input('fullname');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $country = $request->input('country');
                $sector = $request->input('sector');
                $msg_client = $request->input('message');
                $selected_products = $this->productsRepository->getSelectedProducts($request->input('id'));

                Mail::send('emails.order', array('request' => $request, 'fullname' => $fullname, 'email' => $email, 'phone' => $phone, 'country' => $country, 'sector' => $sector, 'msg_client' => $msg_client, 'selected_products' => $selected_products,), function($message) use ($email, $fullname)
                {
                    $message->from($email, $fullname);
                    $message->to('info@adidaspices.com')->subject('Online Order');
                }); 
            }

        }

        // return redirect 
        return redirect()->back();
    }

}