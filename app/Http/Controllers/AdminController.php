<?php

namespace App\Http\Controllers;

use App\Images;
use App\User;
use App\wwd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function SignIn()
    {
        return view('admin.signin')->with(['title'=>'Admin Sign In']);
    }
    public function SignInValidate()
    {
        if(Auth::attempt(Input::only('username','password'))){
            return redirect()->action('AdminController@Home');
        }
        else
        {
            Session::flash('error','Incorrect Username/Password');
            return redirect()->back();
        }
    }
    public function RegUsers()
    {
        $user = new User();
        $user->username = 'prime';
        $user->password = Hash::make('prime');
        $user->save();
    }
    public function Home()
    {
        return view('admin.home')->with(['title' => 'Home','users' => User::all(),'slidImag' => Images::all(),'wwd' => wwd::all()]);
    }
    public function UploadSliderImage(Request $request){
        echo '<pre>';
        var_dump(Input::get('sliderImage'), $request->all());
        var_dump($request->hasFile('sliderImage'));
        echo '</pre>';
        if($request->hasFile('sliderImage'))
        {
            $img = new Images();
            $image = $request->file('sliderImage');
            $img->image_link = time() . '.' . $image->getClientOriginalExtension();
            $img->image_type = 0;
            $img->caption = Input::get('caption');
            if($img->save())
            {
                $request->file('sliderImage')->move(
                    base_path() . '/public/images/slider/', $img->image_link
                );
                $this->sessionSuccess();
            }
            else{
                $this->sessionError();
            }
        }
        else
        {
            $this->sessionError();
        }
        return redirect()->back();
    }
    public function sessionSuccess()
    {
        var_dump('success');
        Session::flash('success','Operation Completed Successfully');
    }
    public function sessionError()
    {
        var_dump('error');
        Session::flash('error','Operation could not be completed at this time');
        return redirect()->back();
    }
    public function DeleteSliderImage($id)
    {
        var_dump($id);
        $img = Images::find($id);
        if($img->delete())
        {
            $this->sessionSuccess();
        }
        else{
            $this->sessionError();
        }
        return redirect()->back();
    }
    public function DeleteWWDImage($id)
    {
        var_dump($id);
        $img = wwd::find($id);
        if($img->delete())
        {
            $this->sessionSuccess();
        }
        else{
            $this->sessionError();
        }
        return redirect()->back();
    }
    public function UploadWWD(Request $request)
    {
        if($request->hasFile('wwdImage'))
        {
            $wwd = new wwd();
            $img = $request->file('wwdImage');
            $wwd->img = time() . '.' . $img->getClientOriginalExtension();
            $wwd->caption = Input::get('wwdcaption');
            $wwd->title = Input::get('wwdtitle');
            $wwd->link = Input::get('wwdlink');
            if($wwd->save())
            {
                $request->file('wwdImage')->move(
                    base_path() . '/public/images/wwd/', $wwd->img
                );
                $this->sessionSuccess();
            }
            else{
                $this->sessionError();
            }
        }
        else
        {
            $this->sessionError();
        }
        return redirect()->back();
        var_dump(Input::all());
    }


}
