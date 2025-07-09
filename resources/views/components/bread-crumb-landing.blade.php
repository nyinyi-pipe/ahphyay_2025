@if (empty($class) || $class !== 'hidden')
<div id="page-title-area" class="{{ $class ?? '' }}">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>{{ $title ?? 'Page' }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">{{ $title ?? 'Current Page' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif