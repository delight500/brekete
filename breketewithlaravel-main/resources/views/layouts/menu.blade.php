<!-- need to remove -->
<li class="nav-item">
    <a href="/admin" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-header brand-link">COMPLAINTS SECTION</li>

<li class="nav-item">
    <a href="{{ route('complaints') }}" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>All Complaints</p>
         <span class="right badge badge-danger">5</span>
    </a>
</li>

@can('awaiting')
<li class="nav-item">
    <a href="{{ route('awaiting') }}" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>Awaiting Review</p>
        <span class="right badge badge-success">5</span>
    </a>
</li>
@endcan

<li class="nav-item">
    <a href="/admin/pending" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>Pending Complaints</p>
        <span class="right badge badge-warning">5</span>
    </a>
</li>

<li class="nav-header brand-link">RESOLVED COMPLAINTS</li>

<li class="nav-item">
    <a href="/admin/resolved" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>Resolved Complaints</p>
        <span class="right badge badge-primary">5</span>
    </a>
</li>

<li class="nav-header brand-link">OTHER COMPLAINTS</li>

<li class="nav-item">
    <a href="/admin/flagged" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>Flagged Complaints</p>
        <span class="right badge badge-danger">5</span>
    </a>
</li>

<li class="nav-header brand-link">TESTIMONIALS SECTION</li>

<li class="nav-item">
    <a href="/admin/testimonials" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>Testimonials</p>
        <span class="right badge badge-primary">5</span>
    </a>
</li>

@can('manage-users')

<li class="nav-header brand-link">ADMIN SETUP</li>

<li class="nav-item">
    <a href="{{ route('users.view') }}" class="nav-link ">
       <i class="nav-icon fas fa-users"></i></i>
        <p>Users</p>
    </a>
</li>
@can('total-control')
<li class="nav-item">
    <a href="{{ route('users.view') }}" class="nav-link ">
       <i class="nav-icon fas fa-th"></i></i>
        <p>Settings</p>
    </a>
</li>
@endcan
@endcan
