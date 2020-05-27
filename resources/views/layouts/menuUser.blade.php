<div id="welcomeUser">
    @can('isUser')
        <div style="color:white">Benvenuto, <a href="{{route('profile')}}">{{ Auth::user()->username }}</a>!</div>
    @endcan
    @can('isAdmin')
        <div style="color:white">Benvenuto, <a href="{{route('admin')}}">{{ Auth::user()->username }}</a>!</div>
    @endcan
    @can('isStaff')
        <div style="color:white">Benvenuto, <a href="{{route('staff')}}">{{ Auth::user()->username }}</a>!</div>
    @endcan
</div>