<div
    class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <div class="px-4 pt-8 mx-auto text-center lg:pt-16">
        {{ $title }}
        {{ $desc }}
    </div>
    {{ $slot }}
    <div class="w-full h-full bg-gradient-to-b from-sky-50 to-transparent dark:from-sky-900">
    </div>
</div>
