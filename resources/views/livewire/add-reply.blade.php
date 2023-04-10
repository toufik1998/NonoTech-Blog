{{-- <form action="{{ route('comments.reply') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $item->id }}">

    <input type="hidden" name="post_id" value="{{ $item->post_id }}">
    <div class="form-group">
        <textarea name="comment" class="form-control" rows="3" placeholder="Write your reply here..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-sm rounded-pill mt-2">Submit reply</button>
    <button type="button" class="btn btn-secondary btn-sm rounded-pill mt-2 ml-2 cancel-reply-comment" data-parent-id="{{ $item->id }}">Cancel</button>
</form> --}}

<div >
    @if($showForm)

    <form wire:submit.prevent="store" id="form-reply">
        <div class="form-group">

            <textarea class="form-control" wire:model="reply" id="reply" rows="3" placeholder="Write your reply here..."></textarea>
            <button type="submit" id="submit-reply-btn" class="btn btn-primary btn-sm rounded-pill mt-2 d-inline ">Submit replyy</button>
            {{-- <button type="button" class="btn btn-secondary btn-sm rounded-pill mt-2 ml-2 cancel-reply-comment" data-parent-id="{{ $item->id }}">Cancel</button> --}}

            @error('reply') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    </form>

    @endif
</div>

