<div class="bg-white pt-24 sm:pt-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" >{{$post->title}}</h1>
            <div
                class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 text-gray-700 lg:max-w-none lg:grid-cols-2">
                <div>
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-8">
</div>

<livewire:comments-section :post="$post" />