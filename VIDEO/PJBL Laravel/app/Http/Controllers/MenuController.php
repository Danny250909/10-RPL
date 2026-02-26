<?php 
namespace App\Http\Controllers;
use App\models\menu;
use App\Http\Requests\StoremenuRequest;
use App\Http\Requests\UpdatemenuRequest;

// class menuController extends Controller
// {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        // $menus = menu::all();
        // 
        // $menus = menu::join('menus', 'menus.idmenu', '=', 'menus.idmenu')->select(['menus.*', 'menus.menu'])->paginate(1);
        // return view('Backend.menu.select', ['menus' => $menus, 'menus' => $menus]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // $menus = menu::all();
        // return view('Backend.menu.insert', ['menus' => $menus]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'gambar' => 'required|max:2048',
    //          'menu' => 'required,
    //          'deskripsi' => 'required,
    //          'harga' => 'required,
    //     ]);
    //     $id = $request->idmenu;
    //     $namagambar = $request->file('gambar')->getClientOriginalName();
    //     $request->gambar->move(public_path('gambar'), $namagambar);
    //     menu::create([
    //         'idmenu' => $id,
    //         'menu' => $data['menu'],
    //         'deskripsi' => $data['deskripsi'],
    //         'harga' => $data['harga'],
    //         'gambar' => $namagambar,
    //     return redirect('admin/menu');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    // public function show($idmenu)
    // {
    //     Menu::where('idmenu','=',$idmenu)->delete();
    //     return redirect('admin/menu');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    // public function edit($idmenu)
    // {
    //     $menus = menu::all();
    //     $menu = Menu::where('$idmenu', '=', $idmenu)->first();
    //     return view('Backend.menu.update', ['menu' => $menu, 'menus' => $menus]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemenuRequest  $request
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $idmenu)
    // {
    //     if (isset($request->gambar)) {
        //     $namagambar = $request->file('gambar')->getClientOriginalName();
        //     $data = $request->validate([
        //         'gambar' => 'required|max:2048',
        //          'menu' => 'required,
        //          'deskripsi' => 'required,
        //          'harga' => 'required,
        //     ]);

        //     Menu::where('idmenu', '=', $idmenu)->update([
        //         'menu' => $data['menu'],
        //         'deskripsi' => $data['deskripsi'],
        //         'harga' => $data['harga'],
        //     ]);
        //     $request->gambar->move(public_path('gambar'), $namagambar);
    //     } else {
        //     $data = $request->validate([
        //          'menu' => 'required,
        //          'deskripsi' => 'required,
        //          'harga' => 'required,
        //     ]);

        //     Menu::where('idmenu', '=', $idmenu)->update([
        //         'menu' => $data['menu'],
        //         'deskripsi' => $data['deskripsi'],
        //         'harga' => $data['harga'],
        //     ]);
    //     }
    //     return redirect('admin/menu');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
//     public function destroy(menu $menu)
//     {
//         $menu->delete();
//         return redirect()->route('menu.index')
//             ->with('success', 'menu deleted successfully.');
//     }

    // public function select(Request $request)
    // {
    //     $id = $request->idmenu;
    //     $menus = menu::all();

    //     $menus = menu::join('menus', 'menus.idmenu', '=', 'menus.idmenu')
    //         ->select(['menus.*', 'menus.menu'])
    //         ->where('menus.idmenu', '=', $id)
    //         ->paginate(1);
    //     return view('Backend.menu.select', ['menus' => $menus, 'menus' => $menus]);

    // }
// }