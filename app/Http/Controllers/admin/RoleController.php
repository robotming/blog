<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Thrift\BatchMutation;

class RoleController extends Controller
{
    // 权限 https://learnku.com/laravel/t/8018/extension-recommendation-role-and-authority-control-in-spatielaravel-permission-laravel-applications#1e4362
    public function addGoods() {
//        $role = Role::create(['name' => 'writer']);
//        $permission = Permission::create(['name' => 'edit articles']);
        $user = User::find(2);
//        $users = User::role('writer')->get();
//        $users = User::permission('edit articles')->get();
//        $user->hasAllRoles(Role::all());
//        $user->givePermissionTo('edit articles');
//        $user->givePermissionTo('edit articles', 'delete articles');
//        $user->givePermissionTo(['edit articles', 'delete articles']);
//        $user->assignRole('writer');
//        $res = $user->hasPermissionTo('edit articles');
        $permissionNames = $user->getPermissionNames();
        $roles = $user->getRoleNames(); // Returns a collection

        dd($permissionNames, $roles);
    }

    public function userList () {

        $uses = app(User::class)->get()->toArray();

        dd($uses);
    }
}
