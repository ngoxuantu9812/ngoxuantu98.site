<div class="view_item">
    <span><img src="{{$comment->user->avatar ?? 'frontend/images/Avt.png'}}" alt=""> </span>
    <div class="view_text">
        <p>{{$comment['content']}}</p>
        <div class="er-gallery">
            <div class="er-images">
                @php
                    $images = isset($comment->images) && is_array($comment->images)  ? $comment->images : [];
                @endphp
                @foreach ($images as $image)
                    <span><img src="{{image($image)}}" alt="{{$image}}"> </span>
                @endforeach
            </div>
            <div class="er-doc">
                <h4>{{__('public.attach files')}}:</h4>
                <ul>
                    @php
                        dd($comment);
                        $files = isset($comment->files) && is_array($comment->files) ? $comment->files : [];
                    @endphp
                    @foreach($files as $file)
                        <li><a href="" title="{{$file}}" target="_blank"><i
                                    class="fal fa-file"></i>{{$file}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>