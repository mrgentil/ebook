@inject('markdown', 'Parsedown')
@php($markdown->setSafeMode(true))

@if(isset($reply) && $reply === true)
    <ul class="children">
        <li id="comment-{{ $comment->id }}" class="comment">
@else
  <li id="comment-{{ $comment->id }}" class="comment">
@endif
      <article>
          <div class="comment-avatar kopa-pull-left">
              <a href="#"><img alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar" src="https://www.gravatar.com/avatar/{{ md5($comment->commenter->email ?? $comment->guest_email) }}.jpg?s=64"></a>
          </div>
          <div class="comment-content">
              <header>
                  <div class="entry-meta style-01">
                      <p class="entry-author">
                          <a href="#">
                              <i class="fa fa-user"></i>
                              {{ $comment->commenter->name ?? $comment->guest_name }}
                          </a>
                      </p>
                      <p class="entry-date"><i class="fa fa-calendar-o"></i> {{ $comment->created_at->diffForHumans() }}</p>
                  </div>
              </header>
              <p>{!! $markdown->line($comment->comment) !!}</p>
          </div>
      </article>
    <div class="media-body">
        <div>
            @can('reply-to-comment', $comment)
                <button data-toggle="modal" data-target="#reply-modal-{{ $comment->id }}" class="btn btn-sm btn-link text-uppercase">Répondre</button>
            @endcan
            @can('edit-comment', $comment)
                <button data-toggle="modal" data-target="#comment-modal-{{ $comment->id }}" class="btn btn-sm btn-link text-uppercase">Modifier</button>
            @endcan
            @can('delete-comment', $comment)
                <a href="{{ route('comments.destroy', $comment->id) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->id }}').submit();" class="btn btn-sm btn-link text-danger text-uppercase">Supprimer</a>
                <form id="comment-delete-form-{{ $comment->id }}" action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            @endcan
        </div>

        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Editer un commentaire</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Mettre à jour votre commentairz ici:</label>
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="ct-btn-1 style-05" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="ct-btn-1 style-05">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        @can('reply-to-comment', $comment)
            <div class="modal fade" id="reply-modal-{{ $comment->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.reply', $comment->id) }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Répondre à un commentaire</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Entrez votre commentaire ici:</label>
                                    <textarea required class="form-control" name="message" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="ct-btn-1 style-05" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="ct-btn-1 style-05">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        <br />{{-- Margin bottom --}}

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->id))
            @foreach($grouped_comments[$comment->id] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'reply' => true,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
@if(isset($reply) && $reply === true)
        </li>
    </ul>
@else
  </li>
@endif
