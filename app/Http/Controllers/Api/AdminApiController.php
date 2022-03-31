<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
class AdminApiController extends Controller
{
    //
    public function getAllAdmin()
    {
        if (Admin::all()->count() > 0) {
            return response()->json(Admin::all(), 200);
        } else {
            return response()->json('No data', 200);
        }
    }
    public function getAdminById($id)
    {
        if (Admin::find($id)) {
            return response()->json(Admin::find($id), 200);
        } else {
            return response()->json('No data', 200);
        }
    }
    public function updateAdmin($id, Request $request)
    {
        // get data from request body
        $data = $request->all();
        // update data
        if (Admin::find($id)) {
            $admin = Admin::find($id);
            $admin->fullname = $data['fullname'];
            $admin->username = $data['username'];
            $admin->password = $data['password'];
            $admin-> updated_at = date('Y-m-d H:i:s');
            $admin->save();
            return response()->json('Update success', 200);
        } else {
            return response()->json('Update failed', 200);
        }
    }
    public function createAdmin(Request $request)
    {
        // get data from request body
        $data = $request->all();
        // create new data
        $admin = new Admin();
        $admin->fullname = $data['fullname'];
        $admin->username = $data['username'];
        $admin->password = $data['password'];
        $admin->created_at = date('Y-m-d H:i:s');
        $admin->updated_at = date('Y-m-d H:i:s');
        if ($admin->save()) {
            return response()->json('Create success', 200);
        } else {
            return response()->json('Create failed', 200);
        }
    }
    public function deleteAdmin($id)
    {
        if (Admin::find($id)) {
            Admin::destroy($id);
            return response()->json('Delete success', 200);
        } else {
            return response()->json('Delete failed', 200);
        }
    }
}
