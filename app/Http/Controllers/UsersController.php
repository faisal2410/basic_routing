<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $users = User::all();

        return view( 'users.index', compact( 'users' ) );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view( 'users.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
       // Validate and store the new user
// Code to handle user creation

return redirect()->route( 'users.index' )->with( 'success', 'User created successfully.' );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $user = User::findOrFail( $id );

return view( 'users.show', compact( 'user' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id ) {
        $user = User::findOrFail( $id );

return view( 'users.edit', compact( 'user' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
       // Validate and update the user
// Code to handle user update

return redirect()->route( 'users.show', $id )->with( 'success', 'User updated successfully.' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
       $user = User::findOrFail( $id );
$user->delete();

return redirect()->route( 'users.index' )->with( 'success', 'User deleted successfully.' );
    }
}
