
@props([
    'page_title'=>null,
    'home' =>null,
    'title'=>null,
   ])
              <!-- start page title -->
              <div class="page-title-box" style="margin: 0 -24px 0px -24px;">
                <div class="container-fluid">
                 <div class="row align-items-center">
                     <div class="col-sm-6">
                         <div class="page-title">
                            <h4>{{ $page_title }}</h4>
                                 <ol class="breadcrumb m-0">
                                     <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $home }}</a></li>
                                     <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $title }}</a></li>
                                     {{-- <li class="breadcrumb-item active">Horizontal</li> --}}
                                 </ol>
                         </div>
                     </div>
                     <div class="col-sm-6">
                        {{-- <div class="float-end d-none d-sm-block">
                            <a href="" class="btn btn-success">Add Widget</a>
                        </div> --}}
                     </div>
                 </div>
                </div>
             </div>
             <!-- end page title -->
