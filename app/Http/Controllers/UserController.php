<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;


class UserController extends Controller
{


    public function __construct()
    {
        view()->share('type', 'user');
    }

    /*
    * Display a listing of the resource.A
    *
    * @return Response
    */
    public function index()
    {
        // Show the page
        $users = User::get();
        return view('user.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.create_edit');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function showNotification()
    {
        $user = User::find(Auth::id());
        $unreadNotifications = $user->notifications()->unread()->get();

        return view('user.notifications', compact('unreadNotifications'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {

        $user = new User ($request->except('password','password_confirmation'));
        $user->password = bcrypt($request->password);
        $user->confirmation_code = str_random(32);
        $user->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $user
     * @return Response
     */
    public function edit(User $user)
    {
        return view('user.create_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $user
     * @return Response
     */
    public function update(UserRequest $request, User $user)
    {

        print($user);
        $password = $request->password;
        $passwordConfirmation = $request->password_confirmation;

        if (!empty($password)) {
            if ($password === $passwordConfirmation) {
                $user->password = bcrypt($password);
            }
        }
        $user->update($request->except('password','password_confirmation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */

    public function delete(User $user)
    {
        $user->delete();
        return view('user.delete', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $users = User::select(array('users.id', 'users.name', 'users.email', 'users.confirmed', 'users.created_at'));

        return Datatables::of($users)
            ->edit_column('confirmed', '@if ($confirmed=="1") <span class="glyphicon glyphicon-ok"></span> @else <span class=\'glyphicon glyphicon-remove\'></span> @endif')
            ->add_column('actions', '@if ($id!="1")<a href="{{{ url(\'user/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("user/modal.edit") }}</a>
                    <a href="{{{ url(\'user/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("user/modal.delete") }}</a>
                @endif')
            ->remove_column('id')
            ->make();
    }

}
