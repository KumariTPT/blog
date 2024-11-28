@extends('partials.layout')

@section('content')
    <div class="container mx-auto py-8">
        @if($posts->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($posts as $post)
                    <div class="card bg-white shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800 hover:text-blue-600 transition duration-300">
                                <a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a>
                            </h2>
                            <p class="mt-2 text-sm text-gray-600">
                                {{ Str::limit($post->body, 120) }}
                            </p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xs text-gray-400">
                                    {{ $post->created_at->diffForHumans() }}
                                </span>
                                <span class="text-xs text-gray-400">
                                    {{ $post->comments_count }} {{ Str::plural('comment', $post->comments_count) }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <p class="text-lg text-red-600">Nothing to be found</p>
            </div>
        @endif
    </div>
@endsection
