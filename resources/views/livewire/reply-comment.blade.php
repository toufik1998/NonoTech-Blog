<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <textarea wire:model="reply" class="form-control" rows="3" placeholder="Write your reply here..."></textarea>
            @error('reply') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm rounded-pill mt-2">Submit reply</button>
    </form>
</div>
