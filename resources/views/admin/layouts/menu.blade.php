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



<li class="nav-item start {{active_link('about','active open')}}  ">
    <a href="{{aurl('about/1/edit')}}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{trans('admin.about')}}</span>
        <span class="selected"></span>
    </a>
</li>

<li class="nav-item start {{active_link('causes','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-podcast"></i>
        <span class="title">{{trans('admin.causes')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('causes','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('causes','active open')}}  "> 
            <a href="{{aurl('causes')}}" class="nav-link "> 
                <i class="fa fa-podcast"></i>
                <span class="title">{{trans('admin.causes')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('causes/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('causestype','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{trans('admin.causestype')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('causestype','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('causestype','active open')}}  "> 
            <a href="{{aurl('causestype')}}" class="nav-link "> 
                <i class="fa "></i>
                <span class="title">{{trans('admin.causestype')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('causestype/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('blog','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-paste"></i>
        <span class="title">{{trans('admin.blog')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('blog','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('blog','active open')}}  "> 
            <a href="{{aurl('blog')}}" class="nav-link "> 
                <i class="fa fa-paste"></i>
                <span class="title">{{trans('admin.blog')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('blog/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('member','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-user-o"></i>
        <span class="title">{{trans('admin.member')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('member','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('member','active open')}}  "> 
            <a href="{{aurl('member')}}" class="nav-link "> 
                <i class="fa fa-user-o"></i>
                <span class="title">{{trans('admin.member')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('member/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('manger','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-street-view"></i>
        <span class="title">{{trans('admin.manger')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('manger','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('manger','active open')}}  "> 
            <a href="{{aurl('manger')}}" class="nav-link "> 
                <i class="fa fa-street-view"></i>
                <span class="title">{{trans('admin.manger')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('manger/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('volunteerscontoller','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa "></i>
        <span class="title">{{trans('admin.volunteerscontoller')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('volunteerscontoller','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('volunteerscontoller','active open')}}  "> 
            <a href="{{aurl('volunteerscontoller')}}" class="nav-link "> 
                <i class="fa "></i>
                <span class="title">{{trans('admin.volunteerscontoller')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('volunteerscontoller/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('message','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-indent"></i>
        <span class="title">{{trans('admin.message')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('message','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('message','active open')}}  "> 
            <a href="{{aurl('message')}}" class="nav-link "> 
                <i class="fa fa-indent"></i>
                <span class="title">{{trans('admin.message')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('message/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>