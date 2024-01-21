<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a technologie')
        </h2>
    </x-slot>
    <x-planets-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Title')</h3>
        <p>{{ $technologie->title }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Detail')</h3>
        <p>{{ $technologie->detail }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Image')</h3>
        <p>{{ $technologie->image_path }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
        <p>{{ $technologie->created_at->format('d/m/Y') }}</p>
        @if($technologie->created_at != $technologie->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{ $technologie->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-planets-card>
</x-app-layout>