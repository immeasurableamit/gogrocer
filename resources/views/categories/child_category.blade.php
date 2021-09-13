@php
$value = null;
for ($i = 0; $i < $child_category->level; $i++) {
    $value .= '--';
}
@endphp
<option value="{{ $child_category->id }}" {{ $child_category->id == $category->parent_id ? 'selected' : '' }}>
    {{ $value . ' ' . $child_category->name }} </option>
@if ($child_category->categories)
    @foreach ($child_category->categories as $childCategory)
        @include('categories.child_category', ['child_category' => $childCategory])
    @endforeach
@endif
