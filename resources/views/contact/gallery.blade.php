
<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center">
            <h3>The Product Gallery</h3>
            <p class="lead">awesome products prepared with creative ideas and great design</p>
        </div>
        <div class="cbp-panel">
            <div id="filters-container" class="cbp-filter-container text-center">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
                @foreach($vsefotki as $d)
                    <div data-filter=".print" class="cbp-filter-item">{{$d['name']}}</div>
                @endforeach
            </div>

            <div id="grid-container" class="cbp">
                @foreach($vsefotki as $data)
                        <div class="cbp-item web logo">
                            <div class="cbp-caption-defaultWrap">  <img src="{{asset('/storage/'. $data['image'])}}" alt="" /></div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Tellus Nibh</div>
                                        <div class="cbp-l-caption-desc">Web Design</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                @endforeach
          {{--      @foreach($data as $user)
                            <div class="cbp-item web logo">
                                    <div class="cbp-caption-defaultWrap"> <img src="{{asset('/storage/'. $user->gallerys)}}" alt="" /></div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-title">Tellus Nibh</div>
                                                <div class="cbp-l-caption-desc">Web Design</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                @endforeach--}}







            </div>
            <!--/.cbp -->
            <div class="divide30"></div>
            <div class="text-center">
                <div id="loadMore-container" class=""> <a href="ajax/loadmore.html" class="cbp-l-loadMore-link btn btn-border dark"> <span class="cbp-l-loadMore-defaultText">LOAD MORE</span> <span class="cbp-l-loadMore-loadingText">LOADING...</span> <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span> </a> </div>
            </div>
            <!--/.text-center -->
        </div>
        <!--/.cbp-panel -->
    </div>
    <!-- /.container -->
</div>
<!-- /.light-wrapper -->
