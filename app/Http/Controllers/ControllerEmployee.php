<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Overtimes;
use Illuminate\Http\Request;

class ControllerEmployee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'title' => 'Dashboard',
            'employee' => Employee::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.register');
    }

    public function dataPegawai()
    {
        return view('dataPegawai', [
            'title' => 'Halaman data pegawai',
            'data' => Employee::paginate(5)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data emplyee
        $validateDataEmployee = $request->validate([
            'name' => 'required|unique:employees',
            'email' => 'required',
            'password' => 'required',
        ]);

        $validateDataEmployee['salary'] = 0;
        Employee::create($validateDataEmployee);

        $validateDataUser['name'] = $request->name;
        $validateDataUser['email'] = $request->email;
        $validateDataUser['role'] = 1;
        $validateDataUser['password'] = bcrypt($request->password);
        User::create($validateDataUser);

        return redirect('/employee/create')->with('success', 'Data employee berhasil ditambahkan, Silahkan lakukan login');
    }

    public function durasiLembur()
    {
        return view('durasiLembur', ['title' => 'Halaman Tambah Durasi Lembur']);
    }

    public function add_durasiLembur(Request $request)
    {
        $validateDataDurasi = $request->validate([
            'date' => 'required|unique:overtimes',
            'time_started' => 'required',
            'time_ended' => 'required',
        ]);

        $validateDataDurasi['employee_id'] = auth()->user()->id;
        $validateDataDurasi['jam'] = 0;
        Overtimes::create($validateDataDurasi);
        return redirect('/durasiLembur')->with('success', 'Data lembur berhasil ditambahkan');
    }

    public function bonusLembur()
    {
        $data = Overtimes::where('employee_id', auth()->user()->id)->orderBy('id', 'desc')->limit(1)->first();
        $sum = Overtimes::where('employee_id', auth()->user()->id)->sum('jam');

        if ($data == null) {
            return view('bonusLembur', [
                'title' => 'Halaman bonus lembur',
                'jam' => '0',
                'bonus' => 'Maaf, Anda belum Pernah Lembur',
                'data' => $data
            ]);
        } else {
            $date_start = date_create($data->time_started);
            $date_ended = date_create($data->time_ended);
            $diff = date_diff($date_start, $date_ended);

            $total = $sum * 10000;

            return view('bonusLembur', [
                'title' => 'Halaman bonus lembur',
                'jam' => $diff->h,
                'bonus' => $total,
                'data' => $data
            ]);
        }
    }

    public function add_jam(Request $request)
    {
        $validateJam['jam'] = $request->jam;
        Overtimes::where('created_at', $request->created_at)->update($validateJam);
        return redirect('/bonusLembur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $id)
    {
        $jam = Overtimes::where('employee_id', $id->id)->sum('jam');

        return view('detail', [
            'title' => 'detail pegawai',
            'data' => $id,
            'jam' => $jam
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $id)
    {
        return view('editPegawai', [
            'title' => 'Edit data pegawai',
            'employee' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateDataEmployee = $request->validate([
            'salary' => 'required',
        ]);

        Employee::where('id', $id)->update($validateDataEmployee);

        return redirect('/dataPegawai')->with('success', 'Data pegawai berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Employee::where('id', $id)->delete();
        Overtimes::where('employee_id', $id)->delete();

        return redirect('/dataPegawai')->with('success', 'Data pegawai berhasil dihapus');
    }
}
