<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tampil(): View
    {
        $User = User::get();
        return view('admin.User.manage', compact('User'));
    }

    public function create(): View
    {
        return view('admin.User.create');
    }

      // Store a new category
      public function submit(Request $request)
      {
          $User = new User();
          $User-> name = $request-> name;
          $User-> email =$request-> email;
          $User-> usertype =$request-> usertype;
          
          $User->save();
      
  
      return redirect()-> route ('admin.User.manage');
      }
      function edit($id){
          $User=User::find($id);
          return view('admin.User.edit', compact('User'));
      }
      function update( Request $request, $id){
          $User=User::find($id);
          $User-> name = $request-> name;
          $User-> email =$request-> email;
          $User-> usertype =$request-> usertype;
          $User->update();
  
      return redirect()-> route ('admin.User.manage');
      }
  
      function delete($id){
          $User=User::find($id);
          $User->delete();
          return redirect()-> route ('admin.User.manage');
      }
      
      }
  
  


