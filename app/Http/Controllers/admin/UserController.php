<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Thrift\BatchMutation;

class UserController extends Controller
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

    /**
     * 用户列表
     * @return \Illuminate\Http\Response
     */
    public function list() {

        $uses = app(User::class)->get()->toArray();

        return response()->view('admin/users/index', [
            'users' => $uses
        ]);
    }


    /**
     * 添加用户
     * @param Request $request
     * @return mixed
     */
    public function userAdd(Request $request) {
        if ($request->method() == 'POST') {
            $username = $request->post('name');
            $password = $request->post('password');
            $email = $request->post('email');
            if (empty($username) || empty($password)) {
                return response()->json([
                    'code' => 400,
                    'msg' => '不能为空',
                ]);
            }
            //
            $res = app(User::class)->where([
                    'name' => $username,
                    'password' => md5($password),
            ])->first();
            if (!empty($res)) {
                return response()->json([
                    'code' => 400,
                    'msg' => '已存在',
                ]);
            }

            $res = app(User::class)->create([
                'name' => $username,
                'email' => $email,
                'password' => md5($password),
            ]);
            if (false !== $res) {
                return redirect('admin/user/list');
            }
        }
        return response()->view('admin/users/add', []);
    }

    /**
     * 添加用户
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request) {
        if ($request->method() == 'POST') {
            $id = (int)$request->post('id');
            $password = $request->post('password');
            $email = $request->post('email');
            //
            $res = app(User::class)->find($id);
            if (empty($res)) {
                return response()->json([
                    'code' => 400,
                    'msg' => '不存在',
                ]);
            }
            $data = [];
            if (!empty($email)) $data['email'] = $email;
            if (!empty($password)) $data['password'] = md5($password);

            if (!empty($data)) {
                app(User::class)->where([
                    'id' => $id,
                ])->update($data);
            }
            return redirect('admin/user/list');
        }
        $id = $request->get('id');
        $user = app(User::class)->find($id);
        return response()->view('admin/users/update', [
            'user' => $user
        ]);
    }

    /**
     * 用户详情
     * @param Request $request
     * @return mixed
     */
    public function detail(Request $request) {
        $id = $request->get('id');
        $user = app(User::class)->find($id);
        return response()->view('admin/users/detail', [
            'user' => $user
        ]);
    }

    /**
     * 删除
     * @param Request $request
     * @return mixed
     */
    public function delete(Request $request) {
        $id = (int)$request->get('id');

        //
        $res = app(User::class)->find($id);
        if (empty($res)) {
            return response()->json([
                'code' => 400,
                'msg' => '不存在',
            ]);
        }

        $res = app(User::class)->where(['id' => $id])->delete();
        return redirect('admin/user/list');
    }

    public function permission(Request $request) {
        $id = (int)$request->get('id');

        echo 1;
    }
}
