<x-layouts.app title="Solaris | Laravel & Filament Business Website Starter Kit">
    <section class="mx-auto grid w-full max-w-7xl items-center gap-12 px-6 py-16 md:grid-cols-2 md:px-10 lg:gap-16 lg:py-24">
        <div class="flex flex-col items-start gap-6">
            <p class="rounded-full bg-violet-50 px-4 py-2 text-sm font-semibold tracking-wide text-violet-800">
                LARAVEL + FILAMENT STARTER KIT
            </p>

            <h1 class="text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                A better starting point for your next business website.
            </h1>

            <p class="max-w-xl text-lg leading-8 text-slate-600">
                Solaris gives you a ready-to-use content management foundation, so you can focus on building the
                website your business needs.
            </p>

            <a href="{{ url('/admin') }}"
                class="inline-flex items-center rounded-lg bg-violet-700 px-5 py-3 text-sm font-semibold text-white transition hover:bg-violet-800 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2">
                Explore the admin panel
            </a>
        </div>

        <img
            src="{{ asset('images/solaris.png') }}"
            alt="Solaris Laravel Starter Kit: ready-to-use resources and database tables for a business website."
            class="h-auto w-full rounded-3xl border border-violet-100 shadow-xl shadow-violet-950/10"
        >
    </section>
</x-layouts.app>
