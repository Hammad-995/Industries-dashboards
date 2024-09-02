@props([
    'item' => ''
    ])

<div class="sidebar-buttons">
    <div class="main-dashboard text-center mb-3">
        <a href="{{$item->href}}" class="btn btn-sidebar">{{$item->text}}</a>
    </div>
</div>