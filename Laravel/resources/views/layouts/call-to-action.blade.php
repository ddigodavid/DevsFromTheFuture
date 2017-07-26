<div class="container call-to-action">
    <div class="full-height fill-width">
        <a href="{{ sprintf("%s%s", route('register.form'), '?utm_source=website&utm_campaign=Bot%C3%A3o%20Commit') }}" class="fill-height">
            <div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-1 fill-height v-align-content-center">
                <h3 class="white-label">{!! $text !!}</h3>
            </div>
            <div class="col-sm-12 col-md-5 fill-height v-align-content-center">
                        <span class="dark-blue-label commit-here-button">
                            [&nbsp;&nbsp;&nbsp;COMMIT HERE&nbsp;&nbsp;&nbsp;]
                            {{--<a href="{{ route('register.form') }}">[&nbsp;&nbsp;&nbsp;COMMIT HERE&nbsp;&nbsp;&nbsp;]</a>--}}
                        </span>
            </div>
        </a>
    </div>
</div>