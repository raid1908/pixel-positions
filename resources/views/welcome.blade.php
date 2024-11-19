<x-layout>
    <div class="space-y-10">
        <section class="text-center mt-6">
            <h1 class="font-bold text-4xl">Let`s find your next job</h1>
            <form action="" class="mt-6 max-w-[75%] m-auto">
                <input type="text" placeholder="Web Developer..." class="rounded-xl text-white border bg-white/5 border-white/10 px-5 py-5 w-full">
            </form>
        </section>
        <section class="pt-6">
            <x-section-heading class="mb-6">Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 ">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
        <section>
            <x-section-heading class="mb-6">Tags</x-section-heading>
            <div class="space-x-1 mt-6">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading class="mb-6">Recent Jobs</x-section-heading>
            <div class="space-y-6 mt-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>
    </div>
</x-layout>
