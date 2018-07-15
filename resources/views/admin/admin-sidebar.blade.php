<div class="title">
    @if(Auth::guard('admin')->check())
    {{ auth()->guard('admin')->user()->nome }}
    @else
    <h1 class="h4">User</h1>
    @endif
    
    @if(Auth::guard('admin')->user()->tipo == 'master')
        <p>Admin Master</p>
    @else
        <p>Admin Comum</p>
    @endif
</div>