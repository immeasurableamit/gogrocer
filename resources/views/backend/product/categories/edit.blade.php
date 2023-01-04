@extends('backend.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $sub_title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ 'Category Information' }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="p-4" action="{{ route('categories.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PATCH">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{ 'Name' }} <i
                                            class="las la-language text-danger" title="{{ 'Translatable' }}"></i></label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{ $category->name }}"
                                            class="form-control" id="name" placeholder="{{ 'Name' }}" required>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{ 'Parent Category' }}</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control aiz-selectpicker" name="parent_id"
                                            data-toggle="select2" data-placeholder="Choose ..."data-live-search="true"
                                            data-selected="{{ $category->parent_id }}">
                                            <option value="0">{{ 'No Parent' }}</option>
                                            @foreach ($categories as $acategory)
                                                <option value="{{ $acategory->id }}"
                                                    {{ $category->parent_id == $acategory->id ? 'selected' : '' }}>
                                                    {{ $acategory->name }}</option>
                                                @foreach ($acategory->childrenCategories as $childCategory)
                                                    @include('categories.child_category', [
                                                        'child_category' => $childCategory,
                                                    ])
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">
                                        {{ 'Ordering Number' }}
                                    </label>
                                    <div class="col-md-9">
                                        <input type="number" name="order_level" value="{{ $category->order_level }}"
                                            class="form-control" id="order_level" placeholder="{{ 'Order Level' }}">
                                        <small>{{ 'Higher number has high priority' }}</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{ 'Type' }}</label>
                                    <div class="col-md-9">
                                        <select name="digital" required class="form-control aiz-selectpicker mb-2 mb-md-0">
                                            <option value="0" @if ($category->digital == '0') selected @endif>
                                                {{ 'Physical' }}</option>
                                            <option value="1" @if ($category->digital == '1') selected @endif>
                                                {{ 'Digital' }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">{{ 'Banner' }}
                                        <small>({{ '200x200' }})</small></label>
                                    <div class="col-md-9">
                                        <input type="file" name="banner" class="form-control"
                                            onchange="document.getElementById('banner').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="{{ $category->getFirstMediaUrl('banner') }}" class="category-image"
                                            width="100" id="banner" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="signinSrEmail">{{ 'Icon' }}
                                        <small>({{ '32x32' }})</small></label>
                                    <div class="col-md-9">
                                        <input type="file" name="icon" class="form-control"
                                            onchange="document.getElementById('icon').src = window.URL.createObjectURL(this.files[0])">
                                        <img src="{{ $category->getFirstMediaUrl('icon') }}" class="category-image"
                                            id="icon" width="100" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{ 'Meta Title' }}</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="meta_title"
                                            value="{{ $category->meta_title }}" placeholder="{{ 'Meta Title' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{ 'Meta Description' }}</label>
                                    <div class="col-md-9">
                                        <textarea name="meta_description" rows="5" class="form-control">{{ $category->meta_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">{{ 'Slug' }}</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="{{ 'Slug' }}" id="slug"
                                            name="slug" value="{{ $category->slug }}" class="form-control">
                                    </div>
                                </div>
                                @if (get_setting('category_wise_commission') == 1)
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">{{ 'Commission Rate' }}</label>
                                        <div class="col-md-9 input-group">
                                            <input type="number" lang="en" min="0" step="0.01"
                                                id="commision_rate" name="commision_rate"
                                                value="{{ $category->commision_rate }}" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary">{{ 'Save' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
