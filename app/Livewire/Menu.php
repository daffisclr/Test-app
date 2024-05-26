<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\User;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Menu extends Component
{
    public $user, $main_modules, $sub_menus = [];

    public $listeners = [
        'updateHeaderInfo' => 'refresh'
    ];

    public function mount()
    {
        if (Auth::guard('user')->check()) {
            $this->user = User::findOrFail(auth()->id());

            $this->main_modules = DB::table('modules')
                ->leftJoin('module_role', 'module_role.module_id', '=', 'modules.id')
                ->where('modules.valid_status', '=', 1)
                ->where('modules.module_level', '=', 0)
                ->where('module_role.role_id', '=', $this->user->role_id)
                ->where('module_role.valid', '=', 1)
                ->select(['modules.*', 'module_role.valid', 'module_role.C', 'module_role.R', 'module_role.U', 'module_role.D',])
                ->get();

            $this->get_sub_menu();
        }
    }

    public function render()
    {
        return view('livewire.menu');
    }

    public function get_sub_menu()
    {
        $parent_menus =
            DB::table('modules')
            ->leftJoin('module_role', 'module_role.module_id', '=', 'modules.id')
            ->where('modules.valid_status', '=', 1)
            ->where('modules.module_level', '=', 1)
            ->where('module_role.role_id', '=', $this->user->role_id)
            ->where('module_role.valid', '=', 1)
            ->select(['modules.*', 'module_role.valid'])
            ->get();

        $child_menus =
            DB::table('modules')
            ->leftJoin('module_role', 'module_role.module_id', '=', 'modules.id')
            ->where('modules.valid_status', '=', 1)
            ->where('modules.module_level', '=', 2)
            ->where('module_role.role_id', '=', $this->user->role_id)
            ->where('module_role.valid', '=', 1)
            ->select(['modules.*', 'module_role.valid', 'module_role.C', 'module_role.R', 'module_role.U', 'module_role.D'])
            ->get();

        foreach ($parent_menus as $key => $parent) {
            array_push($this->sub_menus, [
                'name' => $parent->name,
                'valid_status' => $parent->valid_status,
                'valid' => $parent->valid,
                'submenu' => []
            ]);

            foreach ($child_menus as $child) {
                if ($child->parent_module == $parent->id) {
                    array_push($this->sub_menus[$key]['submenu'], [
                        'name' => $child->name,
                        'url' => $child->url,
                        'icon' => $child->icon,
                        'valid_status' => $child->valid_status,
                        'valid' => $child->valid,
                        'C' => $child->C,
                        'R' => $child->R,
                        'U' => $child->U,
                        'D' => $child->D
                    ]);
                }
            }
        }
    }
}
