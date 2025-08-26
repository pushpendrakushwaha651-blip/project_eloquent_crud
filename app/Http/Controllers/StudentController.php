<?php

namespace App\Http\Controllers;

use App\Models\Student;
// students1 table name 

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()

{            
    //  Student  model hai 
    //  featch all the users data 
    // $users = Student::all();
    $users = Student::simplePaginate(5);


    // dd($users);
    // return view('students', ['users' => $users] );
    return view('home', compact('users'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    //  add new user 
    public function store(Request $request)
    {

        $request->validate([
               'name' => 'required',
        'email' => 'required|email',
        'age' => 'required|integer',
        'city' => 'required'

        ]);


        // $user =new Student;
        // $user->name=$request->name;
        // $user->email=$request->email;
        // $user->age=$request->age;
        // $user->city=$request->city;
        // $user->save();

        // mass Add [name] to fillable property to allow mass assignment
        // mass assigment use jab karte hai jab bhot sare form hote hai 

      
    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age,
        'city' => $request->city,
    ]);

        // dd($user);
        return redirect()->route('users.index')
        ->with('status','New User Added Successfully ');


        


    }

    /**
     * Display the specified resource. single user 
     */
public function show(Student $user)
{   
    //  $user=Student::find($user);
    //   $user direct data ko fect kar raha hai 
    return view("viewuser", compact('user'));
}



    /**
     * Show the form for editing the specified resource.
     */
    // edit page show hoga 
    // public function edit(Student $user)
    // {
    //     //
    //     // $student =Student::find($student->id);

    //     return view("update", compact('user'));

    // }
public function edit(Student $student)
{
    return view("update", compact('student'));
}

public function update(Request $request, Student $student)
{
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|unique:students1,email,' . $student->id,
        'age'   => 'required|integer',
        'city'  => 'required|string|max:255',
    ]);

    $student->update($request->only(['name', 'email', 'age', 'city']));

    return redirect()->route('users.index')
                     ->with('success', 'User updated successfully!');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        
        $student->delete();

        return redirect()->route('users.index')
                         ->with('success', 'User deleted successfully!');

    }
}
