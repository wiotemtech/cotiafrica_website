<nav id="sidebar"
    class="bg-app w3-sidebar w3-top w3-bottom w3-collapse w3-text-white w3-border-right w3-border-top scrollbar"
    style="z-index:3;width:230px;height:auto;margin-top:54px;border-color:rgba(0, 0, 0, .1)!important" id="mySidebar">
    <div class="w3-bar-item w3-border-bottom w3-hide-large" style="padding:6px 0">
        <label for="sidebar-control" class="w3-left w3-button w3-large w3-opacity-min"
            style="background:#5216ac!important"><i class="fa fa-bars"></i></label>
        <h5 class="" style="line-height:1; margin:0!important; font-weight:300">
            <a href="#" class="w3-button" style="background:#5216ac!important">
                
            </a>
        </h5>
    </div>

    <div class="w3-bar-block">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
        class=" w3-bar-item w3-button w3-padding-large w3-hover-text-primary">
        <i class="fa fa-fw fa-book"></i>
        &nbsp;<span>Dashboard</span>

    </a>

        <!-- Blogs Management -->
        <a href="{{ route('blogs.index') }}"
            class=" w3-bar-item w3-button w3-padding-large w3-hover-text-primary">
            <i class="fa fa-fw fa-book"></i>
            &nbsp;<span>Blogs</span>

        </a>

         <!-- Blogs Management -->
         <a href="{{ route('events.index2') }}"
         class=" w3-bar-item w3-button w3-padding-large w3-hover-text-primary">
         <i class="fa fa-fw fa-book"></i>
         &nbsp;<span>Events</span>

     </a>

          <!-- Blogs Management -->
          <a href="{{ route('messages.index3') }}"
          class=" w3-bar-item w3-button w3-padding-large w3-hover-text-primary">
          <i class="fa fa-fw fa-book"></i>
          &nbsp;<span>messages from Contact Form</span>
 


    </div>
</nav>
