<x-layout>
  <x-slot name="content">
    <article>
      <h1 class="text-blue-900 my-4 px-2 text-3xl text-center capitalize">
        {{ $post->title }}
      </h1>
      <p class="post-category my-2">
        By
        <a
          class="text-blue-500"
          href="/postsby/{{ $post->author->username }}"
        >
          {{ $post->author->fullname }}
        </a>
        In
        <a href="/categories/{{ $post->category->slug }}">
          {{ $post->category->name }}
        </a>
      </p>
      <div>
        <p class="post-body text-xl text-justify">
          {{ $post->body }}
        </p>
        <p class="post-date">
          Published On:
          {{ date('l jS \of F Y ', $post->published_date) }}
        </p>
      </div>

    </article>
  </x-slot>
</x-layout>
