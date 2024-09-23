<section class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h3 class="mb-4">Trending Topics</h3>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                        @foreach($topicA as $A)
                        <div class="custom-block bg-white shadow-lg">
                            <a href="{{route('topicsDetails' , $A->id )}}">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">{{ $A->Title }}</h5>

                                        <p class="mb-0">{{ \Illuminate\Support\Str::limit($A->Content, 40, $end='.....') }}</p>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto">{{ $A->NumberOfViews }}</span>
                                </div>

                                <img src="{{asset('assets/admin/images/topics/'.$A->image )}}" class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                    @foreach($topicB as $B)
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="{{asset('assets/images/businesswoman-using-tablet-analysis.jpg')}}" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">{{ $B->Title }}</h5>

                                        <p class="text-white">{{ \Illuminate\Support\Str::limit($B->Content, 40, $end='.....') }}</p>

                                        <a href="{{route('topicsDetails' ,$B->id )}}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                    </div>

                                    <span class="badge bg-finance rounded-pill ms-auto">{{ $B->NumberOfViews }}</span>
                                </div>

                                <div class="social-share d-flex">
                                    <p class="text-white me-4">Share:</p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-pinterest"></a>
                                        </li>
                                    </ul>


                                    @if (session()->has('marked_' . $B->id))

                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="custom-icon bi bi-bookmark-fill smoothscroll ms-auto" viewBox="0 0 16 16">
                                        <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                                    </svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bookmark ms-auto" viewBox="0 0 16 16">
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                                    </svg>
                                    @endif
                                </div>

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
</section>
