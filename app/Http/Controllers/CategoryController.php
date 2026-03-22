<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function getDescendantIds($category)
    {
        $ids = [];
        foreach ($category->children as $child) {
            $ids[] = $child->id;
            $ids = array_merge($ids, $this->getDescendantIds($child));
        }
        return $ids;
    }

    public function index()
    {
        $categories = Category::where('is_delete',0)->with('parent')->get();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = Category::where('is_delete',0)->get();
        return view('category.create',compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'name'=>'required',
        'description'=>'nullable',
        'parent_id'=>'nullable|exists:categories,id',
        'image'=>'nullable|image'
    ]);

    // upload image
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('categories','public');
        }

        Category::create($data);
        return redirect()->route('category.index')->with('msg','Created');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $excludeIds = $this->getDescendantIds($category);
        $excludeIds[] = $id;

        $parents = Category::whereNotIn('id',$excludeIds)
                    ->where('is_delete',0)->get();

        return view('category.edit',compact('category','parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name'=>'required',
            'description'=>'nullable',
            'parent_id'=>'nullable|exists:categories,id',
            'image'=>'nullable|image'
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('categories','public');
        }

        $category->update($data);
        return redirect()->route('category.index')->with('msg','Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Category::findOrFail($id);
        $cat->is_delete = 1;
        $cat->save();

        return redirect()->route('category.index')
                ->with('success','Đã xoá thành công');
    }
}
