<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
public function index()
    {
        return view('welcome');
   }
   
  
    
    public function roleta() {
        
          
            $sorteio = mt_rand(1, 8);
                
            switch ($sorteio){
                case 1:             
                    $sorteio= ['sorteio' =>'10% de desconto'];
                    break;
                
                case 2:
                    $sorteio= ['sorteio' =>'3% de desconto'];
                    break;
                
                case 3:
                    $sorteio= ['sorteio' =>'5% de desconto'];
                    break;
                
                case 4:
                    $sorteio= ['sorteio' =>'tente outra vez'];
                    break;
                
                case 5:
                    $sorteio= ['sorteio' =>'5% de desconto'];
                    break;
                
                case 6:
                    $sorteio= ['sorteio' =>'3% de desconto'];
                    break;
                
                case 7:
                     $sorteio= ['sorteio' =>'10% de desconto'];
                    break;
                
                case 8:
                     $sorteio= ['sorteio' =>'tente outra vez'];
                    break;
            }
            
             
          
            return view('roleta', compact('sorteio'));

    }
}
