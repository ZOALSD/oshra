<li class="nav-item start {{ active_link(null,'active open') }} ">
    <a href="{{aurl('')}}" class="nav-link nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">{{trans('admin.dashboard')}}</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item start {{active_link('settings','active open')}}  ">
    <a href="{{aurl('settings')}}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{trans('admin.settings')}}</span>
        <span class="selected"></span>
    </a>
</li>

<li class="nav-item start {{active_link('addadmin','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{trans('admin.addadmin')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('addadmin','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('addadmin','active open')}}  "> 
            <a href="{{aurl('addadmin')}}" class="nav-link "> 
                <i class="fa "></i>
                <span class="title">{{trans('admin.addadmin')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('addadmin/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>