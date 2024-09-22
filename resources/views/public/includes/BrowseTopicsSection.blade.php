    <section class="explore-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Browse Topics</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                        <div class="row">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach($Categories as $index => $Category)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $index === 0 ? 'active' : '' }}" id="tab-{{$Category->id}}"
                                        data-bs-toggle="tab" data-bs-target="#tab-pane-{{$Category->id}}"
                                        type="button" role="tab" aria-controls="tab-pane-{{$Category->id}}"
                                        aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                        {{$Category->CategoryName}}
                                    </button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="myTabContent">
                                            @foreach($Categories as $index => $Category)
                                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="tab-pane-{{$Category->id}}"
                                                    role="tabpanel" aria-labelledby="tab-{{$Category->id}}" tabindex="0">

                                                    <div class="row">

                                                        @foreach($Category->topics->slice(0, 3)  as $topic)
                                                        @if($topic->Published === 1)
                                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                                            <div class="custom-block bg-white shadow-lg">
                                                                <a href="topics-detail.html">
                                                                    <div class="d-flex">
                                                                        <div>
                                                                            <h5 class="mb-2">{{$topic->Title}}</h5>
                                                                            <p class="mb-0">{{ \Illuminate\Support\Str::limit($topic->Content, 40, $end='.....') }}</p>
                                                                        </div>
                                                                        <span class="badge bg-design rounded-pill ms-auto">{{$topic->NumberOfViews}}</span>
                                                                    </div>
                                                                    <img src="{{asset('/assets/images/topics/undraw_Remote_design_team_re_urdx.png')}}" class="custom-block-image img-fluid" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
</section>


