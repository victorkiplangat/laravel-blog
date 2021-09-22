<x-layout>
  <x-slot name="content">
    <article>
      @foreach ($posts as $post)
        <h1 class="text-2xl text-blue-900 my-3">
          <a href="/posts/{{ $post->slug }}">
            {{ $post->title }}
          </a>
        </h1>
        <p class="post-category my-3">
          By
          <a
            class="text-blue-500"
            href="/postsby/{{ $post->author->username }}"
          >
            {{ $post->author->fullname }}
          </a>
          In
          <a
            class="underline hover:no-underline"
            href="/categories/{{ $post->category->slug }}"
          >
            {{ $post->category->name }}
          </a>
        </p>
        <div>
          <p class="post-excerpt my-3">
            {{ $post->excerpt }}
          </p>
          <p class="post-date">
            Published On:
            {{ date('l jS \of F Y ', $post->published_date) }}
          </p>
        </div>

      @endforeach
    </article>
  </x-slot>
</x-layout>
