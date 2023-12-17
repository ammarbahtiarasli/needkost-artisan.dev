<a {{ $attributes->merge(['class' => 'px-2 py-1.5 rounded-md inline-flex bg-sky-200/80 hover:bg-sky-300/80 active:bg-sky-400 focus:ring-sky-500/80 items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-gray-900 uppercase tracking-widest focus:outline-none focus:ring-2  focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
