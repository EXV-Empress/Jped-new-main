<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // UPDATES THE NAME AND PHOTO OF PROFILE
    public function update_profile(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:2|max:100',
            'profile_photo'=>'nullable|image|mimes:jpg,bmp,png'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        } 

        $user=$request->user();

        if($request->hasFile('profile_photo')){
            if($user->profile_photo){
                $old_path=public_path().'/uploads/profile_images/'.$user->profile_photo;
            }

            $image_name='profile-image-'.time().'.'.$request->profile_photo->extension();
            $request->profile_photo->move(public_path('/uploads/profile_images'),$image_name);
        }else{
            $image_name=$user->profile_photo;
        }


        $user->update([
            'name'=>$request->name,
            'profile_photo'=>$image_name
        ]);

        return response()->json([
            'message'=>'Profile successfully updated',
        ],200);


    }

    // UPDATES THE PROFILE PASSWORD
    public function change_password(Request $request){
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = $request->user();
        if(Hash::check($request->old_password, $user->password)){
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        return response()->json([
            'message'=> 'password successfully updated',
        ], 200);
        } else {
        return response()->json([
            'message'=>'old password does not match',
        ], 400);
    }
    }
}
