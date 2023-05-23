<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\CountryCode;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/notes';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return Factory|RedirectResponse|View
     */
    public function index()
    {
        if (\auth()->check()) {
            return redirect()->route('avatar');
        }

        $country_codes = CountryCode::all(['code', 'name']);
        return view('auth.register', [ 'country_codes' => $country_codes ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->assignRole('user');
        return $user;
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'required|string|max:255',
            'country_code' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
        ]);

        return redirect()->back()->withErrors("Sample Error")->withInput();

        $contactNumber = '+' . $validatedData['country_code'] . $validatedData['mobile_number'];

        // Create and store the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'contactNumber' => $contactNumber,
            'gender' => $validatedData['name'],
            'source' => "self",
            'access_level' => json_encode(array(1)),
        ]);
        
        $user->assignRole('user');

        // Optionally, log in the user after registration
        auth()->login($user);

        // Redirect the user to a success page or perform other actions
        return redirect()->route('avatar')->with('success', 'Registration successful!');
    }

    public function apistore(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'gender' => 'required|string|max:255',
            // 'country_code' => 'required|string|max:255',
            // 'mobile_number' => 'required|string|max:255',
        ]);

        // Create and store the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'contactNumber' => $validatedData['mobile_number'],
            'gender' => $validatedData['name'],
            'source' => "self",
            'access_level' => json_encode(array(1)),
        ]);

        
        $user->assignRole('user');
        // Optionally, log in the user after registration
        auth()->login($user);

        // Redirect the user to a success page or perform other actions
       // return redirect()->route('avatar')->with('success', 'Registration successful!');

        return response()->json(["result"=>"success", "message" => 'Registration successful!']);
    }

    
    public function getAvatar()
    {
        // Validate the form data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'gender' => 'required|string|max:255',
        //     'country_code' => 'required|string|max:255',
        //     'mobile_number' => 'required|string|max:255',
        // ]);

        // return redirect()->back()->withErrors("Sample Error")->withInput();

        // $contactNumber = '+' . $validatedData['country_code'] . $validatedData['mobile_number'];

        // // Create and store the user
        // $user = User::create([
        //     'name' => $validatedData['name'],
        //     'email' => $validatedData['email'],
        //     'password' => Hash::make($validatedData['password']),
        //     'contactNumber' => $contactNumber,
        //     'gender' => $validatedData['name'],
        //     'source' => "self",
        //     'access_level' => json_encode(array(1)),
        // ]);

        // // Optionally, log in the user after registration
        // auth()->login($user);

        // Redirect the user to a success page or perform other actions
        return redirect()->route('avatar')->with('success', 'Registration successful!');
    }


}
