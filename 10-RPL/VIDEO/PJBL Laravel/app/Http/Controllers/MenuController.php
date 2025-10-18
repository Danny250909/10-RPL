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
        // $menus = Kategori::all();
        // 
        // $menus = menu::join('kategoris', 'menus.idkategori', '=', 'kategoris.idkategori')->select(['menus.*', 'kategoris.kategori'])->paginate(1);
        // return view('Backend.menu.select', ['menus' => $menus, 'kategoris' => $kategoris]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        // return view('menu.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoremenuRequest $request)
    // {
    //     menu::create($request->all());
    //     return redirect()->route('menu.index')
    //         ->with('success', 'menu created successfully.');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    // public function show(menu $menu)
    // {
    //     return view('menu.show', compact('menu'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    // public function edit(menu $menu)
    // {
    //     return view('menu.edit', compact('menu'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemenuRequest  $request
     * @param  \App\models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdatemenuRequest $request, menu $menu)
    // {
    //     $menu->update($request->all());
    //     return redirect()->route('menu.index')
    //         ->with('success', 'menu updated successfully.');
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
    //     $id = $request->idkategori;
    //     $kategoris = Kategori::all();

    //     $menus = menu::join('kategoris', 'menus.idkategori', '=', 'kategoris.idkategori')
    //         ->select(['menus.*', 'kategoris.kategori'])
    //         ->where('menus.idkategori', '=', $id)
    //         ->paginate(1);
    //     return view('Backend.menu.select', ['menus' => $menus, 'kategoris' => $kategoris]);

    // }
// }