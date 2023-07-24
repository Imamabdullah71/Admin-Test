<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ajaxModel;
use Illuminate\Support\Facades\Storage;

class ajaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ajax.ajaxIndex');
    }

    public function fetchAll() {
        $ajaxModel = ajaxModel::all();
        $output = '';
        if ($ajaxModel->count() > 0) {
            $output .= '<table class="table table-info">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($ajaxModel as $rs) {
                $output .= '<tr>
                    <td>' . $rs->id . '</td>
                    <td>' . $rs->first_name . ' ' . $rs->last_name . '</td>
                    <td>' . $rs->email . '</td>
                    <td><img src="storage/images/' . $rs->avatar .  '" width="50" class="img-thumbnail rounded-circle"></td>
                    <td>
                        <a href="#" id="' . $rs->id . '" class="btn btn-sm btn-primary editIcon" data-bs-toggle="modal" data-bs-target="#editUser"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a href="#" id="' . $rs->id . '" class="btn btn-sm btn-danger deleteIcon"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>';
            }

            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">Tidak ada data dalam database!</h1>';
        }
        
            

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $empData = [
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'avatar' => $fileName,
        ];

        ajaxModel::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $emp = ajaxModel::find($id);
        return response()->json($emp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $fileName = '';
        $emp = ajaxModel::find($request->emp_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->avatar) {
                Storage::delete('public/images/', $emp->avatar);
            }
        } else {
            $fileName = $request->emp_avatar;
        }

        $empData = [
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'avatar' => $fileName,
        ];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
