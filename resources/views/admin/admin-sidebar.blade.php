<div class="title">
    @if(Auth::guard('admin')->check())
    {{ auth()->guard('admin')->user()->nome }}
    @else
    <h1 class="h4">User</h1>
    @endif
    <p>Admin-Mor</p>
</div>