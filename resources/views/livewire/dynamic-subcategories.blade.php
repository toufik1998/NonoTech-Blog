{{-- <div class="mb-3">
    <div class="mb-3">
        <label for="category" class="form-label text-white">Post Category</label>
        <select wire:model="selectedCategory" id="category" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}" >{{ $category->category }}</option>
            @endforeach
        </select>

        @error('category_id')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="mb-3">
        <label for="subcategory" class="form-label text-white">Post Subcategory</label>

        <select id="subcategory" name="subcategory_id" class="form-select @error('subcategory_id') is-invalid @enderror">
            <option value="">Select a subcategory</option>
            @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }} {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}">{{ $subcategory->subcategory }}</option>
            @endforeach
        </select>

        @error('subcategory_id')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
        @enderror
    </div>

</div> --}}

<div>
    <div class="mb-3">
        <label for="category" class="form-label text-white">Post Category</label>
        <select wire:model="selectedCategory" id="category" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <<option value="{{ $category->id }}" {{ (old('category_id') == $category->id || $selectedCategory == $category->id) ? 'selected' : '' }}>{{ $category->category }}</option>
            @endforeach
        </select>

        @error('category_id')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="subcategory" class="form-label text-white">Post Subcategory</label>
        <select id="subcategory" name="subcategory_id" class="form-select @error('subcategory_id') is-invalid @enderror">
            <option value="">Select a subcategory</option>
            @foreach ($subcategories as $subcategory)
                <<option value="{{ $subcategory->id }}" {{ (old('subcategory_id') == $subcategory->id || $subcategory->id == $selectedSubcategory) ? 'selected' : '' }}>{{ $subcategory->subcategory }}</option>
            @endforeach
        </select>

        @error('subcategory_id')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
        @enderror
    </div>

</div>
