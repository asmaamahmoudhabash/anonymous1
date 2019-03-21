<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::paginate(10);
        return view('dashboard.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $model)
    {
        return view('dashboard.news.create', compact('model'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'image' => 'required',

        ]);
        $news = News::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/news/' . $name);
            $news->image = 'uploads/news/' . $name;
            $news->save();
        }
        if ($request->hasFile('photo')) {
            $photos = $request->file('photo');
            foreach ($photos as $photo) {
                $name = time() . '' . rand(1111, 99999) . '.' . $photo->getClientOriginalExtension();
                $photo = Image::make($photo);
                $photo->save('uploads/news/images/' . $name);
                $image = new Photo();
                $image->url = 'uploads/news/images/' . $name;
                $news->photos()->save($image);
            }
        }

        flash()->success('success Adding');
        return redirect('AdminPanel/News');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        $images=Photo::all()->where('photoable_id',$id);
        return view('dashboard.news.show', compact('news','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = News::findOrFail($id);
        return view('dashboard.news.edit', compact('model'));

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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',


        ]);
        $news= News::findOrFail($id);
        $news->update($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '' . rand(1111, 99999) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($request->file('image'));
            $img->save('uploads/news/' . $name);
            $news->image = 'uploads/news/' . $name;
            $news->save();
        }

        if ($request->hasFile('photo')) {
            $photos = $request->file('photo');
            foreach ($photos as $photo) {
                $name = time() . '' . rand(1111, 99999) . '.' . $photo->getClientOriginalExtension();
                $photo = Image::make($photo);
                $photo->save('uploads/news/images/' . $name);
                $image = new Photo();
                $image->url = 'uploads/news/images/' . $name;
                $news->photos()->save($image);
            }
        }
        flash()->success('success Editting');
        return redirect('AdminPanel/News');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        flash()->warning('success Deleting');
        return back();
    }

    function delete_img($id)
    {
        $image= Photo::find($id);
        $image->delete();
        flash()->warning('success Deleting');
        return back();


    }




}
