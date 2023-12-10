<?php

namespace App\Http\Controllers\Companies;

use App\Models\Job\Job;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Models\Job\Application;
use App\Models\Category\Category;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function viewLogin()
    {
        return view('companies.view-login');
    }

    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('company')->attempt([
            'email' => $request->input("email"),
            'password' => $request->input("password"),
        ], $remember_me)) {
            return redirect()->route('companies.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index()
    {
        $jobs = Job::select()->count();
        $categories = Category::select()->count();
        $admins = Admin::select()->count();
        $applications = Application::select()->count();
        return view('companies.index', compact('jobs', 'categories', 'admins', 'applications'));
    }
}
