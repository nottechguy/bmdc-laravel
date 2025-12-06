
<div class="c_tab-pane" {{ $attributes->except('hidden') }} @if($attributes->has('hidden')) hidden @endif>{{ $slot }}</div>
