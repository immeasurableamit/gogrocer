@extends('layouts.app')



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
                <a href="{{ route('categories.create') }}" class="btn btn-success ml-3">{{ 'Add New category' }}</a>
            </div>
        </div>


        <div class="container-fluid page__container">

            @include('flash::message')

            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ 'Category Information' }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table aiz-table mb-0">
                                <thead>
                                    <tr>
                                        <th data-breakpoints="lg">#</th>
                                        <th>{{ 'Name' }}</th>
                                        <th data-breakpoints="lg">{{ 'Parent Category' }}</th>
                                        <th data-breakpoints="lg">{{ 'Order Level' }}</th>
                                        <th data-breakpoints="lg">{{ 'Level' }}</th>
                                        <th data-breakpoints="lg">{{ 'Banner' }}</th>
                                        <th data-breakpoints="lg">{{ 'Icon' }}</th>
                                        <th data-breakpoints="lg">{{ 'Featured' }}</th>
                                        <th data-breakpoints="lg">{{ 'Commission' }}</th>
                                        <th width="10%" class="text-right">{{ 'Options' }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{ $key + 1 + ($categories->currentPage() - 1) * $categories->perPage() }}
                                            </td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                @php
                                                    $parent = \App\Models\Category::where('id', $category->parent_id)->first();
                                                @endphp
                                                @if ($parent != null)
                                                    {{ $parent->name }}
                                                @else
                                                    —
                                                @endif
                                            </td>
                                            <td>{{ $category->order_level }}</td>
                                            <td>{{ $category->level }}</td>
                                            <td>
                                                @if ($category->banner != null)
                                                    <img src="{{ $category->getFirstMediaUrl('banner', 'banner') }}"
                                                        alt="{{ 'Banner' }}" class="h-50px">
                                                @else
                                                    —
                                                @endif
                                            </td>
                                            <td>
                                                @if ($category->icon != null)
                                                    <span class="avatar avatar-square avatar-xs">
                                                        <img src="{{ $category->getFirstMediaUrl('icon', 'icon') }}"
                                                            class="h-50px" alt="{{ 'icon' }}">
                                                    </span>
                                                @else
                                                    —
                                                @endif
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0 form-check form-switch">
                                                    <div
                                                        class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                                        <input checked="" type="checkbox" id="subscribe"
                                                            class="custom-control-input" onchange="update_featured(this)"
                                                            value="{{ $category->id }}" <?php if ($category->featured == 1) {
    echo 'checked';
} ?>>
                                                        <label class="custom-control-label" for="subscribe"></label>
                                                    </div>

                                                </label>
                                            </td>
                                            <td>{{ $category->commision_rate }} %</td>
                                            <td class="text-right">
                                                <a {{ Popper::arrow()->size('large')->pop('Reset the results to default') }} class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                    href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                                    title="{{ 'Edit' }}">
                                                    <i class="las la-edit"></i>
                                                </a>
                                                <a href="#" data-target="#delete-modal"
                                                    class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                    data-href="{{ route('categories.destroy', $category->id) }}"
                                                    title="{{ 'Delete' }}">
                                                    <i class="las la-trash" ></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="aiz-pagination">
                                {{ $categories->appends(request()->input())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection


@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')

    <script type="text/javascript">
        function update_featured(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('categories.featured') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    toastr.success('Featured categories updated successfully');
                } else {
                    toastr.success('Something went wrong');
                }
            });
        }
    </script>
@endsection
