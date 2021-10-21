<div class="single-comment-form">
    @if($errors->has('commentable_type'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->get('commentable_type') }}
        </div>
    @endif
    @if($errors->has('commentable_id'))
        <div class="alert alert-danger" role="alert">
            {{ $errors->get('commentable_id') }}
        </div>
    @endif
    <h3>Laissez Un Commenataire</h3>
    <div class="comment-form-content">
        <div class="ct-form-box">
            <div id="respond" class="comment-respond">
                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    @honeypot
                    <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
                    <input type="hidden" name="commentable_id" value="{{ $model->id }}" />
                    <div class="row">
                        {{-- Guest commenting --}}
                        @if(isset($guest_commenting) and $guest_commenting == true)
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <p class="input-block">
                                    <input type="text" value="Nom"  onfocus="if(this.value=='Nom')this.value='';" onblur="if(this.value=='')this.value='Nom';" name="guest_name" class="valid">
                                </p>
                                @error('guest_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- col-md-6 -->

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <p class="input-block">
                                    <input type="text" value="Email" onfocus="if(this.value=='Email')this.value='';" onblur="if(this.value=='')this.value='Email';"  name="guest_email" class="valid">
                                </p>
                                @error('guest_email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <!-- col-md-6 -->
                        @endif

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p class="textarea-block">
                                <textarea name="message"  placeholder="Message" cols="88" rows="5"></textarea>
                            </p>
                        </div>
                        <!-- col-md-12 -->

                    </div>
                    <!-- row -->

                    <p class="input-block btn-block clearfix">
                        <input type="submit" value="Envoyer" class="ct-submit-1">
                    </p>

                </form>

                <div id="response-1"></div>
            </div>
        </div>
        <!-- form-box -->
    </div>
</div>
<!-- single-comment-form -->
