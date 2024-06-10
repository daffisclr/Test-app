<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileTabs extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    protected $queryString = ['tab' => ['keep' => true]];
    public $name, $email, $username, $user_id, $new_password, $new_password_confirmation;

    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

    public function mount()
    {
        $this->tab = request()->tab ? request()->tab : $this->tabname;

        if (Auth::guard('user')->check()) {
            $user = User::findorFail(auth()->id());
            $this->user_id = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->username = $user->username;
        }
    }

    public function updateUserPersonalDetails()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'username' => 'required|min:3|unique:users,username,' . $this->user_id
        ]);

        User::find($this->user_id)
            ->update([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username
            ]);

        $this->dispatch('updateHeaderInfo');
        $this->dispatch('updateUserInfo', [
            'userName' => $this->name,
            'userEmail' => $this->email
        ]);

        $this->showToastr('success', 'Your personal details have been successfully updated');
    }

    public function showToastr($type, $message)
    {
        return $this->dispatch('showToastr', [
            'type' => $type,
            'message' => $message
        ]);
    }

    public function render()
    {
        return view('livewire.admin-profile-tabs');
    }

    //Change Password
    public function changePassword()
    {
        $this->validate([
            'new_password' => 'required|min:5|max:45|required_with:new_password_confirmation|
                same:new_password_confirmation',
            'new_password_confirmation' => 'required'
        ]);

        User::where('id', $this->user_id)->update([
            'password' => Hash::make($this->new_password)
        ]);

        $this->showToastr(
            'success',
            'Your password has been changed!'
        );

        return redirect()->route('user.profile', ['tab' => "personal_details"]);
    }
}
