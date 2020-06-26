<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Carbon\Traits\Date;
class adminController extends Controller
{
    //

    public function index(){



    }


    public function register(Request $request){


      if(\Session::has('ident')):

           return redirect('/admin/home');



      else:

        $email=$request->input('email');
        $mdp=$request->input('mdp');

        $verify=\App\administrateur::whereEmailAndPassword($email,$mdp)->first();

        if($verify==null):

        
            alert()->error('Email ou mot de passe incorect', 'Erreur lors de votre authentification')->persistent("Close");
             return redirect('admin/');

        else:

            if($verify->count()==1):

               

                \Session::put('ident',$verify->id);


                

             

                alert()->success('Connection Etablie avec succès', 'Bienvenue sur votre back office')->persistent("Close");
                return redirect('admin/home');

            endif;


        endif;

    endif;

           
    }



    public function admin(){



              
        if(\Session::has('ident')):

            $inscription=\App\inscription::whereStatus('0')->paginate(2);

          
            $all=\App\inscription::whereStatus('1')->get();


            return $this->returnView('home')->withAll($all);

        else:

           
            alert()->error('Veuillez vous reconnecter')->persistent("Close");
            return redirect('/admin/');

        endif;


    }



    public function demande(){


            

            return $this->returnView('demande');
        
    }


    public function inscription(){


        

        $all=\App\inscription::whereStatus('1')->orderBy('id','desc')->paginate(7);

        return $this->returnView('inscrit');


    }


    public function confirm($id){





             return $this->returnView('confirm')->withId($id);




    }

    public function payement(){




       $payment=\App\investissement::wherePayday(Date('y/m/d'))->leftJoin( 'inscriptions','inscriptions.id', '=', 'investissements.user_id')->get();

      return $this->returnView('payement')->withPayement($payment);

         


    }


    public function search(){


      

        $pay=\App\investissement::wherePayday(Date('y/m/d'))->get();




        

       
        

        return $this->returnView('recherche')->withPay($pay);


        
    }


    public function seacher(Request $req){


        $search=$req->input('search');


        $user = \App\inscription::where('id','LIKE','%'.$search.'%')
           ->orWhere('nom','LIKE','%'.$search.'%')
           ->orWhere('email','LIKE','%'.$search.'%')
           ->orWhere('number','LIKE','%'.$search.'%')
           ->orWhere('prenom','LIKE','%'.$search.'%')
           ->get();

        return $this->returnView('recherche')->withUser($user)->withSearch($search);



    }



    public function profil($id){



        $invest=\App\investissement::whereUser_id($id)->orderBy('id','desc')->paginate(7);

        $inscrit=\App\inscription::whereId($id)->first();


        

       
        $countable=\App\investissement::whereUser_id($id)->get()->count();

        return $this->returnView('profil')->withInscrit($inscrit)->withInvest($invest)->withCountable($countable);


    }


    public function returnView($string){


        $inscription=\App\inscription::whereStatus('0')->orderBy('id', 'desc')->paginate(4);

        $total=\App\inscription::whereStatus('0')->get()->count();

        $pay=\App\investissement::wherePayday(Date('y/m/d'))->get();

        $invest=\App\investissement::whereCreatedAt(Date('y/m/d'))->get();

        $all=\App\inscription::whereStatus('1')->orderBy('id','desc')->paginate(7);

       ;


        return View('layout/admin/'.$string,compact('inscription'),compact('all'))->withCount($total)->withPay($pay);


    }

    public function inscriptionPost(Request $request){


        $confirm= $request->input('confirm');

        \App\inscription::whereId($confirm)->update([

            'status'=>'1'
        ]);


        alert()->success('Compte confirmé ', 'Succès')->persistent("Close");

        return redirect('/admin/demande');
         

    }

    


    public function delete($id){

         



    }


}
