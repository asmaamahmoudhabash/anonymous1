@include('flash::message')
@include('partials.validation-errors')
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Name</label>
    <div class="col-sm-10">
        {{Form::text('site_name',null,[
        'class'=>'form-control',
        'id'=>'site_name',

    ])}}
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Email</label>
    <div class="col-sm-10">
        {{Form::text('site_email',null,[
        'class'=>'form-control',
        'id'=>'site_email',

    ])}}
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Keywords</label>
    <div class="col-sm-10">
        {{Form::text('site_keywords',null,[
        'class'=>'form-control',
        'id'=>'site_keywords',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Description</label>
    <div class="col-sm-10">
        {{Form::textarea('site_description',null,[
        'class'=>'form-control',
        'id'=>'site_description',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Maintence Message</label>
    <div class="col-sm-10">
        {{Form::textarea('maintence_message',null,[
        'class'=>'form-control',
        'id'=>'maintence_message',

    ])}}
    </div>
</div>



<div class="form-group row">
<label class="col-sm-2 col-form-label">maintence status</label>
<div class="col-sm-10">
    {{
        Form::select('maintence',
         ['1' => 'enable', '0' => 'disable'], null,
         ['placeholder' => ' maintence status',
         'class'=>'form-control',
         'id'=>'maintence',

         ])
     }}


</div>
</div>
