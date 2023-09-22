<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Notes;
use App\Models\Status;
use App\Models\UserArchetype;
use Illuminate\Support\Facades\Redirect;

use App\Models\Oto1s;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        if(in_array(1, $access_level)){
            $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
            $archetype = $user_archetype->archetype;
            if($user_archetype){
                if($archetype == "Banker"){
                    return view('dashboard.avatar.banker',["access_level"=>$access_level, "title"=>"The Banker", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
                }else if($archetype == "Capitalist"){
                    return view('dashboard.avatar.capitalist',["access_level"=>$access_level, "title"=>"The Capitalist", "image" => "capitalist.png","avatar" => "capitalist","avatarmiddle" => "capitalistmiddle.png", "user" => $user]);
                }else if($archetype == "Sales Person"){
                    return view('dashboard.avatar.salesperson',["access_level"=>$access_level, "title"=>"The Sales Person", "image" => "salesperson.png","avatar" => "salesperson","avatarmiddle" => "salespersonmiddle.png", "user" => $user]);
                }else if($archetype == "Conqueror"){
                    return view('dashboard.avatar.conqueror',["access_level"=>$access_level, "title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
                }else if($archetype == "Giver"){
                    return view('dashboard.avatar.giver',["access_level"=>$access_level, "title"=>"The Giver", "image" => "giver.png","avatar" => "giver","avatarmiddle" => "givermiddle.png", "user" => $user]);
                }else if($archetype == "Influencer"){
                    return view('dashboard.avatar.influencer',["access_level"=>$access_level, "title"=>"The Influencer", "image" => "influencer.png","avatar" => "influencer","avatarmiddle" => "influencermiddle.png", "user" => $user]);
                }else if($archetype == "Adversary"){
                    return view('dashboard.avatar.adversary',["access_level"=>$access_level, "title"=>"The Adversary", "image" => "adversary.png","avatar" => "adversary","avatarmiddle" => "adversarymiddle.png", "user" => $user]);
                }else{
                    return Redirect::to('http://wealthavatarr.com/quiz/');
                }
            }else{
                return Redirect::to('http://wealthavatarr.com/quiz/');
            }
        }else if(in_array(2, $access_level)){
            return view('dashboard.avatar.oto1',["access_level"=>$access_level, "title"=>"WealthAvatar", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
        }else if(in_array(3, $access_level)){
            return view('dashboard.avatar.oto2',["access_level"=>$access_level, "title"=>"WealthAvatar", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
        }else if(in_array(4, $access_level)){
            return view('dashboard.avatar.oto3',["access_level"=>$access_level, "title"=>"WealthAvatar", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
        }else{
            return Redirect::to('http://wealthavatarr.com/quiz/');
        }
    }
    
    public function basic(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();

        if($user_archetype){
            $archetype = $user_archetype->archetype;                
            if($archetype == "Banker"){
                return view('dashboard.avatar.basic.banker',["access_level"=>$access_level, "title"=>"The Banker", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
            }else if($archetype == "Capitalist"){
                return view('dashboard.avatar.basic.capitalist',["access_level"=>$access_level, "title"=>"The Capitalist", "image" => "capitalist.png","avatar" => "capitalist","avatarmiddle" => "capitalistmiddle.png", "user" => $user]);
            }else if($archetype == "Sales Person"){
                return view('dashboard.avatar.basic.salesperson',["access_level"=>$access_level, "title"=>"The Sales Person", "image" => "salesperson.png","avatar" => "salesperson","avatarmiddle" => "salespersonmiddle.png", "user" => $user]);
            }else if($archetype == "Conqueror"){
                return view('dashboard.avatar.basic.conqueror',["access_level"=>$access_level, "title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
            }else if($archetype == "Giver"){
                return view('dashboard.avatar.basic.giver',["access_level"=>$access_level, "title"=>"The Giver", "image" => "giver.png","avatar" => "giver","avatarmiddle" => "givermiddle.png", "user" => $user]);
            }else if($archetype == "Influencer"){
                return view('dashboard.avatar.basic.influencer',["access_level"=>$access_level, "title"=>"The Influencer", "image" => "influencer.png","avatar" => "influencer","avatarmiddle" => "influencermiddle.png", "user" => $user]);
            }else if($archetype == "Adversary"){
                return view('dashboard.avatar.basic.adversary',["access_level"=>$access_level, "title"=>"The Adversary", "image" => "adversary.png","avatar" => "adversary","avatarmiddle" => "adversarymiddle.png", "user" => $user]);
            }else{
                return Redirect::to('http://wealthavatarr.com/quiz/');
            }
        }else{
            return Redirect::to('http://wealthavatarr.com/quiz/');
        }
    }

///////////////////////////// AVATARS TEST /////////////////////////////////////////////////////////////
    public function adversary(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        //return view('dashboard.avatar.basic.adversary',["access_level"=>$access_level,"title"=>"The Adversary", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);

        return view('dashboard.avatar.adversary',["access_level"=>$access_level,"title"=>"The Adversary", "image" => "adversary.png","avatar" => "adversary","avatarmiddle" => "adversarymiddle.png", "user" => $user]);
    }

    public function banker(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.banker',["access_level"=>$access_level,"title"=>"The Banker", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
    }

    public function capitalist(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.capitalist',["access_level"=>$access_level,"title"=>"The Capitalist", "image" => "capitalist.png","avatar" => "capitalist","avatarmiddle" => "capitalistmiddle.png", "user" => $user]);
    }

    public function conqueror(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        // return view('dashboard.avatar.basic.conqueror',["title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
        return view('dashboard.avatar.conqueror',["access_level"=>$access_level,"title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
    }

    public function giver(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.giver',["access_level"=>$access_level,"title"=>"The Giver", "image" => "giver.png","avatar" => "giver","avatarmiddle" => "givermiddle.png", "user" => $user]);
    }

    public function influencer(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.influencer',["access_level"=>$access_level,"title"=>"The Influencer", "image" => "influencer.png","avatar" => "influencer","avatarmiddle" => "influencermiddle.png", "user" => $user]);
    }
    
    public function salesperson(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.salesperson',["access_level"=>$access_level,"title"=>"The Sales Person", "image" => "salesperson.png","avatar" => "salesperson","avatarmiddle" => "salespersonmiddle.png", "user" => $user]);
    }

///////////////////////////// AVATARS TEST /////////////////////////////////////////////////////////////

///////////////////////////// AVATARS FREE TEST /////////////////////////////////////////////////////////////
    public function adversary_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        //return view('dashboard.avatar.basic.adversary',["access_level"=>$access_level,"title"=>"The Adversary", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);

        return view('dashboard.avatar.basic.adversary',["access_level"=>$access_level,"title"=>"The Adversary", "image" => "adversary.png","avatar" => "adversary","avatarmiddle" => "adversarymiddle.png", "user" => $user]);
    }

    public function banker_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.basic.banker',["access_level"=>$access_level,"title"=>"The Banker", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
    }

    public function capitalist_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.basic.capitalist',["access_level"=>$access_level,"title"=>"The Capitalist", "image" => "capitalist.png","avatar" => "capitalist","avatarmiddle" => "capitalistmiddle.png", "user" => $user]);
    }

    public function conqueror_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        // return view('dashboard.avatar.basic.conqueror',["title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
        return view('dashboard.avatar.basic.conqueror',["access_level"=>$access_level,"title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
    }

    public function giver_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.basic.giver',["access_level"=>$access_level,"title"=>"The Giver", "image" => "giver.png","avatar" => "giver","avatarmiddle" => "givermiddle.png", "user" => $user]);
    }

    public function influencer_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.basic.influencer',["access_level"=>$access_level,"title"=>"The Influencer", "image" => "influencer.png","avatar" => "influencer","avatarmiddle" => "influencermiddle.png", "user" => $user]);
    }
    
    public function salesperson_free(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        return view('dashboard.avatar.basic.salesperson',["access_level"=>$access_level,"title"=>"The Sales Person", "image" => "salesperson.png","avatar" => "salesperson","avatarmiddle" => "salespersonmiddle.png", "user" => $user]);
    }

///////////////////////////// AVATARS TEST /////////////////////////////////////////////////////////////

    public function premium(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        if(in_array(1, $access_level)){
            $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
            $archetype = $user_archetype->archetype;
            if($user_archetype){
                if($archetype == "Banker"){
                    return view('dashboard.avatar.banker',["access_level"=>$access_level, "title"=>"The Banker", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
                }else if($archetype == "Capitalist"){
                    return view('dashboard.avatar.capitalist',["access_level"=>$access_level, "title"=>"The Capitalist", "image" => "capitalist.png","avatar" => "capitalist","avatarmiddle" => "capitalistmiddle.png", "user" => $user]);
                }else if($archetype == "Sales Person"){
                    return view('dashboard.avatar.salesperson',["access_level"=>$access_level, "title"=>"The Sales Person", "image" => "salesperson.png","avatar" => "salesperson","avatarmiddle" => "salespersonmiddle.png", "user" => $user]);
                }else if($archetype == "Conqueror"){
                    return view('dashboard.avatar.conqueror',["access_level"=>$access_level, "title"=>"The Conqueror", "image" => "conqueror.png","avatar" => "conqueror","avatarmiddle" => "conquerormiddle.png", "user" => $user]);
                }else if($archetype == "Giver"){
                    return view('dashboard.avatar.giver',["access_level"=>$access_level, "title"=>"The Giver", "image" => "giver.png","avatar" => "giver","avatarmiddle" => "givermiddle.png", "user" => $user]);
                }else if($archetype == "Influencer"){
                    return view('dashboard.avatar.influencer',["access_level"=>$access_level, "title"=>"The Influencer", "image" => "influencer.png","avatar" => "influencer","avatarmiddle" => "influencermiddle.png", "user" => $user]);
                }else if($archetype == "Adversary"){
                    return view('dashboard.avatar.adversary',["access_level"=>$access_level, "title"=>"The Adversary", "image" => "adversary.png","avatar" => "adversary","avatarmiddle" => "adversarymiddle.png", "user" => $user]);
                }else{
                    return Redirect::to('http://wealthavatarr.com/quiz/');
                }
            }else{
                return Redirect::to('http://wealthavatarr.com/quiz/');
            }
        }else{
            return Redirect::to('http://wealthavatarr.com/quiz/');
        }
    }

    public function oto_1(){

        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();

        $currentMonth = Carbon::now()->format('M'); // Get the current month
        $otos = Oto1s::where('month', $currentMonth)->get();

        $month = date('m');
        $date = Carbon::createFromFormat('m', $month);
        $fullMonthName = $date->format('F');

        // return view('dashboard.avatar.oto1', compact('otos', 'fullMonthName'));
        $archetype = $user_archetype->archetype;

        if(in_array(2, $access_level)){
            return view('dashboard.avatar.oto1',["access_level"=>$access_level, "title"=>"WealthAvatar", "title_image"=>$archetype, "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user, "otos" => $otos, "fullMonthName" => $fullMonthName]);
        }else{
            // return Redirect::away('https://offers.wealthavatar.net/oto-1')->with('_blank');
            return Redirect::away('https://offers.wealthavatar.net/oto-1-for-approval')->with('_blank');
        }
    }

    // Download the audio in Oto1
    // public function download($filename) {
    //     $filePath = public_path('assets/audio/' . $filename);

    //     return response()->download($filePath);
    // }

    // Download the audio in Oto1 from private folder
    public function download($audio) 
    {
        $path = Storage::disk('private')->path('audios/'.$audio);
        if(!Storage::disk('private')->exists('audios/'.$audio)){
            abort(404);
        }
        $headers = [
            'Content-Type' => 'audio/mpeg',
        ];
        return response()->download($path, $audio, $headers);
    }

    public function downloadFile($filename)
    {
        $filePath = storage_path('app/public/downloads/' . $filename);
        $headers = [
            'Content-Type' => 'application/octet-stream',
        ];

        return response()->download($filePath, $filename, $headers);
    }
    
    public function bonuses(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;
        return view('dashboard.avatar.bonuses', ["title"=>"Your Bonuses", "user" => $user]);
    } 

    // Avatars Navigation
    public function avatars(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;
        return view('dashboard.avatar.avatars', ["title"=>"Avatars", "archetype" => $archetype, "user" => $user]);
    } 

    // Contact Navigation
    public function contact(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;
        return view('dashboard.avatar.contact', ["title"=>"Contact Us", "user" => $user]);
    } 

    // Contact Navigation
    public function settings(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;
        return view('dashboard.avatar.settings', ["title"=>"Settings", "user" => $user]);
    } 

    public function oto_2(){

        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;
        
        if(in_array(3, $access_level)){
            return view('dashboard.avatar.oto2',["access_level"=>$access_level, "title"=>"WealthAvatar", "title_image"=>$archetype, "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
        }else{
            return Redirect::away('https://offers.wealthavatar.net/oto-2')->with('_blank');
        }
    }
    
    public function oto_3(){
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        if(in_array(4, $access_level)){
            return view('dashboard.avatar.oto3',["access_level"=>$access_level, "title"=>"WealthAvatar", "image" => "banker.png","avatar" => "banker","avatarmiddle" => "bankermiddle.png", "user" => $user]);
        }else{
            return Redirect::away('https://offers.wealthavatar.net/oto-3')->with('_blank');
        }
    }

    ///////////////////////////////////////////////////////////////////////////////


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $statuses = Status::all();
        // return view('dashboard.notes.create', [ 'statuses' => $statuses ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title'             => 'required|min:1|max:64',
        //     'content'           => 'required',
        //     'status_id'         => 'required',
        //     'applies_to_date'   => 'required|date_format:Y-m-d',
        //     'note_type'         => 'required'
        // ]);
        // $user = auth()->user();
        // $note = new Notes();
        // $note->title     = $request->input('title');
        // $note->content   = $request->input('content');
        // $note->status_id = $request->input('status_id');
        // $note->note_type = $request->input('note_type');
        // $note->applies_to_date = $request->input('applies_to_date');
        // $note->users_id = $user->id;
        // $note->save();
        // $request->session()->flash('message', 'Successfully created note');
        // return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $note = Notes::with('user')->with('status')->find($id);
        // return view('dashboard.notes.noteShow', [ 'note' => $note ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $note = Notes::find($id);
        // $statuses = Status::all();
        // return view('dashboard.notes.edit', [ 'statuses' => $statuses, 'note' => $note ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // //var_dump('bazinga');
        // //die();
        // $validatedData = $request->validate([
        //     'title'             => 'required|min:1|max:64',
        //     'content'           => 'required',
        //     'status_id'         => 'required',
        //     'applies_to_date'   => 'required|date_format:Y-m-d',
        //     'note_type'         => 'required'
        // ]);
        // $note = Notes::find($id);
        // $note->title     = $request->input('title');
        // $note->content   = $request->input('content');
        // $note->status_id = $request->input('status_id');
        // $note->note_type = $request->input('note_type');
        // $note->applies_to_date = $request->input('applies_to_date');
        // $note->save();
        // $request->session()->flash('message', 'Successfully edited note');
        // return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $note = Notes::find($id);
        // if($note){
        //     $note->delete();
        // }
        // return redirect()->route('notes.index');
    }
}
