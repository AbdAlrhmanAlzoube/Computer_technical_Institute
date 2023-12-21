 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Admin<span>Dashboard</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Componet</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Techier</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{route('teachers.index')}}" class="nav-link">Techier List</a>
                        </li>
                        <li class="nav-item">
                            <a href={{route('teachers.create')}} class="nav-link">Add Techier</a>
                        </li>
                      
                    </ul>
                </div>







                <a class="nav-link" data-bs-toggle="collapse" href="#subjects" role="button" aria-expanded="false" aria-controls="subjects">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Subject</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="subjects">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('subjects.index') }}" class="nav-link">Subject List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subjects.create') }}" class="nav-link">Add Subject</a>
                        </li>
                    </ul>
                </div>
                
                <a class="nav-link" data-bs-toggle="collapse" href="#dailySchedule" role="button" aria-expanded="false" aria-controls="dailySchedule">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Daily Schedule</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="dailySchedule">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('dailySchedules.index') }}" class="nav-link">View Daily Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dailySchedules.create') }}" class="nav-link">Add Daily Schedule</a>
                        </li>
                    </ul>
                </div>
                





                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Techier</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">Techier List</a>
                        </li>
                        <li class="nav-item">
                            <a href={{route('teachers.create')}} class="nav-link">Add Techier</a>
                        </li>
                      
                    </ul>
                </div>



            </li>
        </ul>
    </div>
</nav>
<!-- partial -->