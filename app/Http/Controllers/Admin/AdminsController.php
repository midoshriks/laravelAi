<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
// use Illuminate\Console\View\Components\Alert;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = Type::where('model', 'user')->where('name', 'admin')->first();
        $admins = User::where('type_id', $type->id)->get();
        $countries = Country::all();
        // dd($type->id,$admins);

        // this code function delete sweet alert url(https://realrashid.github.io/sweet-alert/confirm-alert?id=confirm-alert) and .env
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.admins.index', compact('admins', 'type', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->dob_date = date('Y-m-d H:i:s', strtotime($request->dob_date));
        $admin->gender = $request->gender;
        $admin->country_id = 1; //$request->country_id;
        $admin->type_id = 1; //$request->type_id;
        $admin->password = bcrypt('12345678'); //$request->password

        $admin->save();

        try {
            $admin->addRole('admin'); //? old attachRole
            $admin->givePermissions($request->permissions);

            $admin->update();

            if ($request->hasFile('avatar')) {
                $uploadedFile = $request->file('avatar');
                // Define the directory where you want to save the image within the public directory
                $directory = 'uploads/admins';
                // Generate a unique filename for the image
                $uniqueFileName = $uploadedFile->hashName();
                // Construct the full path to save the image in the public directory
                $fullPath = public_path($directory . '/' . $uniqueFileName);
                // Optionally, you can use the Spatie Media Library to store and manage media files
                Image::make($request->avatar)->save($fullPath);
                $admin->addMedia($fullPath)->toMediaCollection('photo_user', 'admins');
                // Save the uploaded image to the public directory
                $uploadedFile->move($directory, $uniqueFileName);

                // Now you can associate the image path with the user or perform any other necessary operations
                $admin->avatar = $directory . '/' . $uniqueFileName;
            }
            $admin->update();
            // dd($admin);


            // Alert::success('Success Title', 'Success Message');
            toast('Success Create Admin' . ' ' .  $admin->name, 'success');
            return redirect()->route('dashboard.admins.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        $admin = User::find($id);
        $type = Type::where('model', 'user')->where('name', 'admin')->first();

        // dd($admin);
        return view('admin.admins.edit', compact('admin', 'type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $id)
    {
        $admin = User::find($id);

        $admin->name = $request->name;
        // $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->dob_date = date('Y-m-d H:i:s', strtotime($request->dob_date));
        $admin->gender = $request->gender;
        $admin->country_id = 1; //$request->country_id;
        $admin->password = bcrypt('12345678'); //$request->password

        $admin->update();
        try {
            // $admin_id = DB::table('types')->where('name', 'admin')->first();
            // if ($admin->type_id == $admin_id->id) {

            $admin->syncPermissions($request->permissions);
            // dd($request->all(), 'yes');
            $admin->update();


            if ($request->hasFile('avatar')) {
                $uploadedFile = $request->file('avatar');
                // Define the directory where you want to save the image within the public directory
                $directory = 'uploads/admins';
                // Generate a unique filename for the image
                $uniqueFileName = $uploadedFile->hashName();
                // Construct the full path to save the image in the public directory
                $fullPath = public_path($directory . '/' . $uniqueFileName);
                // Optionally, you can use the Spatie Media Library to store and manage media files
                Image::make($request->avatar)->save($fullPath);
                $admin->addMedia($fullPath)->toMediaCollection('photo_user', 'admins');
                // Save the uploaded image to the public directory
                $uploadedFile->move($directory, $uniqueFileName);

                // Now you can associate the image path with the user or perform any other necessary operations
                $admin->avatar = $directory . '/' . $uniqueFileName;
                // }
            }
            $admin->update();
            // dd($admin);


            // Alert::success('Success Update ' . ' ' .  $admin->name);
            toast('Success Create Admin' . ' ' .  $admin->name, 'success');
            return redirect()->route('dashboard.admins.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, User $user, $id)
    {
        $admin = User::find($id);
        // dd($request->all(),$id,$admin);
        if ($admin->avatar != 'user.png') {
            Storage::disk('public_uploads')->delete('/admins/' . $admin->avatar);
        } //end of if
        // $admin->removePermissions('super_admin');
        $admin->delete();

        toast('Success Delete Admin', 'error');
        return redirect()->route('dashboard.admins.index');
    }
}
