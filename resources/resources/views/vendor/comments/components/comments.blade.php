@php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp
<div class="single-comment-list">
    <h3>Commentaires <span>({{ $comments->count() }})</span></h3>
@if($comments->count() < 1)
    <div class="alert alert-warning" style="margin: 30px;">Aucun commentaire pour l'instant.</div>
@endif
    <ol class="comments-list">
        @php
            $comments = $comments->sortBy('created_at');

            if (isset($perPage)) {
                $page = request()->query('page', 1) - 1;

                $parentComments = $comments->where('child_id', '');

                $slicedParentComments = $parentComments->slice($page * $perPage, $perPage);

                $slicedParentCommentsIds = $slicedParentComments->pluck('id')->toArray();

                $comments = $comments
                    // Remove parent Comments from comments
                    ->whereNotIn('id', $slicedParentCommentsIds)
                    // Keep only comments that are related to spliced parent comments.
                    // This maybe improves performance?
                    ->whereIn('child_id', $slicedParentCommentsIds);

                $grouped_comments = new \Illuminate\Pagination\LengthAwarePaginator(
                    $slicedParentComments->merge($comments)->groupBy('child_id'),
                    $parentComments->count(),
                    $perPage
                );

                $grouped_comments->withPath(request()->path());
            } else {
                $grouped_comments = $comments->groupBy('child_id');
            }
        @endphp
        @foreach($grouped_comments as $comment_id => $comments)
            {{-- Process parent nodes --}}
            @if($comment_id == '')
                @foreach($comments as $comment)
                    @include('comments::_comment', [
                        'comment' => $comment,
                        'grouped_comments' => $grouped_comments
                    ])
                @endforeach
            @endif
        @endforeach
    </ol>
@isset ($perPage)
    {{ $grouped_comments->links() }}
@endisset
</div>
@auth
    @include('comments::_form')
@elseif(config('comments.guest_commenting') == true)
    @include('comments::_form', [
        'guest_commenting' => true
    ])
@else
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Authentication required</h5>
            <p class="card-text">You must log in to post a comment.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
        </div>
    </div>
@endauth
