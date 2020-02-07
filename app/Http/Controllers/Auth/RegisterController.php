<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:24', 'min:4'],
            'sname' => ['required', 'string', 'max:36', 'min:4'],
            'additionally' => ['max:1500'],
            'email' => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'phone' => ['required'],
            'datebirth' => ['required'],
            'gender' => ['required'],
            'password' => ['required', 'string', 'min:6', 'max:24', 'confirmed'],
        ], [
            'name.required' => 'Необходимо заполнить поле "Имя"',
            'name.max' => 'Имя должен содержать максимум 24 символов',
            'name.min' => 'Имя должен содержать минимум 4 символов',
            'sname.required' => 'Необходимо заполнить поле "Фамилия"',
            'sname.max' => 'Фамилия должен содержать максимум 24 символов',
            'sname.min' => 'Фамилия должен содержать минимум 4 символов',
            'email.required' => 'Необходимо заполнить поле "Email"',
            'email.unique' => 'Такой E-mail уже зарегистрирован',
            'email.max' => 'Email должен содержать максимум 60 символов',
            'phone.required' => 'Необходимо заполнить поле "Телефон"',
            'datebirth.required' => 'Необходимо заполнить поле "День рождения"',
            'gender.required' => 'Необходимо заполнить поле "Пол"',
            'password.required' => 'Необходимо заполнить поле "Пароль"',
            'password.min:6' => 'Пароль должен содержать максимум 24 символов',
            'password.max:24' => 'Пароль должен содержать минимум 6 символов',
            'password.confirmed' => 'Пароли не совпадают'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $image = $data['avatar'];
        $resize_img = Image::make($image->getRealPath());
        $image_name = time() .'.'. $image->getClientOriginalExtension();
        $destin = public_path('img/avatar');
        $resize_img->resize(100, 100, function($constrain){
            $constrain->aspectRatio();
        })->save($destin .'/'. $image_name);
        return User::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'sname' => $data['sname'],
            'phone' => $data['phone'],
            'additionally' => $data['additionally'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => 'avatar/'.$image_name,
            'date_of_birth' => $data['datebirth'],
        ]);
    }
}
