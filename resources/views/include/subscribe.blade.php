<section class="subscribe-one">
    <div class="container">
        <div class="subscribe-one__inner">
            <div class="row">
                <!--Start Subscribe One Content-->
                <div class="col-xl-7">
                    <div class="subscribe-one__content">
                        <div class="icon-box">
                            <span class="icon-mail"></span>
                        </div>

                        <div class="text-box">
                            <h2>Corporate Business Consultancy to the <br> World, Subscribe Newsletter</h2>
                        </div>
                    </div>
                </div>
                <!--End Subscribe One Content-->

                <!--Start Subscribe One Form-->
                <div class="col-xl-5">
                    <div class="subscribe-one__form">
                        <form action="{{route('subscribe.store')}}" method="post">
                            @csrf
                            <input type="text" name="email" placeholder="ENTER EMAIL*">
                            <button type="submit"><span class="icon-right-arrow-1"></span></button>
                        </form>
                        <div class="subscribe-one__form-checkbox">
                            <input type="checkbox" name="agree " id="agree" checked>
                            <label for="agree"><span></span>I Agree to terms & Condition</label>
                        </div>
                    </div>
                </div>
                <!--End Subscribe One Form-->
            </div>
        </div>
    </div>
</section> 