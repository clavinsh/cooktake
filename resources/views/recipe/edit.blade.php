<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Recipe') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{old('title',$recipe->title)}}"/>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{old('description',$recipe->description)}}</textarea>
            </div>
            <div class="form-group">
                <label for="thumbnail"></label>
                <input type="file" name="thumbnail" id="thumbnail" />
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</x-app-layout>