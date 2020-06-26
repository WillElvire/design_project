<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;

class inscriptionController extends Controller
{
    //

    public function index(Request $req){


        $name=$req->input('first_name');
        $prenom=$req->input('last_name');
        $password=$req->input('password');
        $mobile=$req->input('mobile');
        $email=$req->input('email');
       
       

        $verify =\App\inscription::whereEmail($email)->get();
        $number=\App\inscription::whereNumber($mobile)->get();





        $pass=$this->Randomkey();

     
        $error="";



        if($verify->count()==0 and $number->count()==0):


             
            
                        if($this->inscrire($name,$prenom,$email,$mobile) ):

                           
                            $id=\App\inscription::whereEmail($email)->first();

                            
                           
                            $authentification=\App\Authentification::create(
                                [ 
                                 "user_id"=>$id->id,
                                 "password"=>$pass ,
                                 "email"=>$id->email
                                 ]
                                );

                           
                            if($authentification):

                             
                              Mail::to($email)
                                
                                ->send(new welcomeMail($pass,$name,$prenom));

                            

                                alert()->success('Votre inscription est en cours de traitement', 'Félicitation')->persistent("Close");

                                 return redirect('action/validation');

                            else:

                                alert()->error('compte déja existant', 'Error')->persistent("Close");
                                return View('action/inscription');


                            endif;


                            
                        else:
                            
                            
                            alert()->error('compte déja existant', 'Error')->persistent("Close");
                            return View('layout.inscription')->withError($error);
                            
                        endif;

            


        else:

            
                alert()->error('compte déja existant', 'Error')->persistent("Close");
                return View('layout.inscription');


        endif;
        
        
    }


    

    public function inscrire($name,$prenom,$email,$mobile){



          
        if(  \App\inscription::create([
    
                'nom'=>$name,
                'prenom'=>$prenom,
                'email'=>$email,
                'number'=>$mobile,
                

             ])  ):


             return true;

        else:


            return false;


        endif;

       

    }



    public function Randomkey(){

         
            
            $pass=\Str::random(11);

            if(\App\authentification::wherePassword($pass)->get()->count()!=0):
         
        
                $pass=\Str::random(11);

            endif;


            return $pass;



    }
}
