<div class="container mt-4 ">
    <p>asd</p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class=" bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="  card-header text-center prose-h2:bg-slate-50 font-weight-bold">
            Laravel 8 - Add Blog Post Form Example
        </div>
        <div class="card-body">
            <div class="form-group my-3">
                <input type="text" id="title" name="title" placeholder="عنوان" class="w-full rounded form-input">
            </div>
            <div class="form-group my-3">
                <textarea name="description" class="rounded w-full form-textarea" placeholder="توضیحات"></textarea>
            </div>
            @livewire('upload-sample-image')
        </div>
    </div>
</div>
