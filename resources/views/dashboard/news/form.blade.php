@include('flash::message')
@include('partials.validation-errors')
@php
    $categories = App\Models\Category::pluck('name', 'id');
@endphp

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        {{Form::text('title',null,[
        'class'=>'form-control',
        'id'=>'title',

    ])}}
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label">Body</label>
    <div class="col-sm-10">
        {{Form::textarea('body',null,[
        'class'=>'form-control',
        'id'=>'body',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Body</label>
    <div class="col-sm-10">
        {{Form::select('category_id',$categories,null,[
        'class'=>'form-control',
        'id'=>'category_id',
        'placeholder'=>'Select  Category',
      ])}}
    </div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Upload   Main Image</label>
<div class="col-sm-10">
    {{Form::file('image',[
           'class'=>'form-control',
          'id'=>'image',

          ])}}
</div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label">phtoes news</label>
    <div class="col-sm-10">
        {{Form::file('photo[]',[
        'class'=>'form-control file_upload_preview',
        'id'=>'photo',
        'multiple '=>'multiple',

        ])}}
    </div>
</div>


