@props(['job'])
@if($job->featured === 1)
    <x-panel class="flex flex-col text-center">
        <div class="">
            <div class="self-start text-sm">{{$job->employer->name}}</div>
            <div class="py-8 ">
                <h3 class="group-hover:text-blue-800 text-xxl font-bold transition-colors duration-300">{{$job->title}}</h3>
                <p class="text-sm mt-4">{{$job->schedule}} - From ${{$job->salary}}</p>
            </div>
            <div class="flex justify-between items-center mt-auto">
                <div class="space-x-1">
                    @foreach($job->tags as $tag)
                        <x-tag size="small" :tag="$tag"></x-tag>
                    @endforeach
                </div>
                <x-employer-logo width="42" height="42"></x-employer-logo>
            </div>
        </div>
    </x-panel>
@endif

