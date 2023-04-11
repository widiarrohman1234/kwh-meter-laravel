<!-- if((request()->user()->level) == 'admin') -->
    <!-- include('template.navbar.navbar_admin') -->
<!-- elseif((request()->user()->level) == 'user') -->
    <!-- include('template.navbar.navbar_user') -->
<!-- endif -->

@include('template.navbar.navbar_admin')