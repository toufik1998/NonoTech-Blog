<div class="ms-auto">
    @if(auth()->check() && !$post->likes()->where('user_id', auth()->user()->id)->exists())

        <div class="form-like d-inline">
            <button wire:click="like"  class="btn btn-outline-primary">
                <i class="fas fa-thumbs-up me-1"></i> Like
            </button>
        </div>

    @else

        <div class="form-like d-inline">
            <button wire:click="unlike" class="btn btn-danger">
                <i class="fas fa-thumbs-down me-1"></i>
                    UnLike
            </button>
        </div>

    @endif
    <span>{{ $post->likes()->count() }} </span>
</div>


