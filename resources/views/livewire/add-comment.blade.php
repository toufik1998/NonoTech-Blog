<div>
    <form wire:submit.prevent="addComment">
        <div class="form-group">
            {{-- <textarea class="form-control" id="comment" wire:model="comment"></textarea> --}}
            <textarea wire:model="comment" name="comment" id="comment" class="comment-textarea" placeholder="Write your comment here"></textarea>
            <button type="submit" class="button">Publish</button>
            @error('comment') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </form>
</div>


{{-- @if (Auth::check())
<form action="{{ url('/comments') }}" method="POST">
    @csrf
    <textarea name="comment" id="comment" class="comment-textarea" placeholder="Write your comment here"></textarea>
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <button type="submit" class="button">Publish</button>
</form>
@else
<section class="comments mt-5">
    <h2 class="section-title">
        Login to add comments
    </h2>
</section>
@endif --}}

